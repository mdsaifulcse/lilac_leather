<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Biggapon;
use App\Models\Brand;
use App\Models\CartProduct;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\SocialIcon;
use Illuminate\Support\ServiceProvider;
use View,Auth,Session;

class CompanyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


        View::composer( // for frontend menu --------------
            [
                'client.index',
            ],
            function ($view)
            {
                $biggapons=Biggapon::where(['status'=>Biggapon::ACTIVE,'show_on_page'=>Biggapon::HOME_PAGE])->orderBy('serial_num','ASC')->take(10)->get();
                $sideA=Biggapon::where(['status'=>Biggapon::ACTIVE,'show_on_page'=>Biggapon::HOME_PAGE,'place'=>Biggapon::SIDE])->orderBy('serial_num','ASC')->take(3)->get();

                $view->with(['biggapons'=>$biggapons,'sideA'=>$sideA]);
            });

        View::composer( // for frontend menu --------------
            [
                'client.layouts.partials.header',
                'client.layouts.partials.right-side-menu',
                'client.layouts.master',
                'client.index',
            ],
            function ($view)
            {
                $menus=Menu::with('activeClientSubMenu')->where(['menu_for'=>Menu::CLIENT_MENU,'status'=>Menu::ACTIVE])
                    ->orderBy('serial_num','ASC')->get();

                $categories=Category::with('subCategoryData')->select('id','category_name','category_name_bn','link','short_description','show_home','icon_photo')
                    ->where(['status'=>Category::ACTIVE,'show_home'=>Category::YES])
                    ->orderBy('serial_num','ASC')->get();
                $categories=collect($categories);

                $socials=SocialIcon::orderBy('serial_num','ASC')->where(['status'=>SocialIcon::ACTIVE])->get();
                $setting=Setting::first();
                $cartProducts=[];


                if (Session::has('sessionId'))
                {
                    $sessionId=Session::get('sessionId');
                    $cartProducts=CartProduct::where(['session_id'=>$sessionId,'type'=>CartProduct::ORDER])->get();
                }

                $view->with(['menus'=>$menus,'categories'=>$categories,'setting'=>$setting,'socials'=>$socials,'cartProducts'=>$cartProducts]);
            });


        View::composer( // for frontend --------------
            [
                'client.index',
            ],
            function ($view)
            {
                $sliders=Slider::select('image','caption')->where(['status'=>Slider::ACTIVE])->orderBy('serial_num',"ASC")->get();
                $authors=Author::select('id','name','name_bn','photo')->where(['status'=>Author::ACTIVE,'show_home'=>Author::Yes])
                    ->orderBy('serial_num',"ASC")->get();

                $view->with(['authors'=>$authors,'sliders'=>$sliders]);
            });

        View::composer( // for Category Product --------------
            [
                'client.layouts.partials.product-filter',
                'client.single-product',
            ],
            function ($view)
            {
                $biggapons=Biggapon::where(['status'=>Biggapon::ACTIVE,'show_on_page'=>Biggapon::DETAIL_PAGE])->orderBy('serial_num','DESC')->take(2)->get();
                $categories=Category::with('products')->select('id','category_name','category_name_bn','link')->get();

                $brands=Brand::with('products')->select('id','brand_name','link')->orderBy('brands.serial_num','ASC')
                    ->where(['brands.status'=>Brand::ACTIVE])->get();

                $view->with(['biggapons'=>$biggapons,'brands'=>$brands,'categories'=>$categories]);
            });
    }
}
