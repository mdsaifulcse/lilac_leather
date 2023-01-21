<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [
            [
                'id'=>'1',
                'category_id'=>'1',
                'sub_category_name'=>'Leather Body Item',
                'sub_category_name_bn'=>'Leather Body Item',
                'short_description'=>'Product short description here',
                'link'=>'leather-body-item',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'1',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],

            [
                'id'=>'2',
                'category_id'=>'1',
                'sub_category_name'=>'Clothing',
                'sub_category_name_bn'=>'Clothing',
                'short_description'=>' Product short description here',
                'link'=>'clothing',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'2',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],

            [
                'id'=>'3',
                'category_id'=>'1',
                'sub_category_name'=>'watch straps',
                'sub_category_name_bn'=>'watch straps',
                'short_description'=>' Product short description here',
                'link'=>'watch-straps',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'3',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],
            [
                'id'=>'4',
                'category_id'=>'1',
                'sub_category_name'=>'Leather container and Holders',
                'sub_category_name_bn'=>'Leather container and Holders',
                'short_description'=>' Product short description here',
                'link'=>'container-and-holders',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'4',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],

            [
                'id'=>'5',
                'category_id'=>'2',
                'sub_category_name'=>'Jute jewelry',
                'sub_category_name_bn'=>'Jute jewelry',
                'short_description'=>' Product short description here',
                'link'=>'jute-jewelry',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'5',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],
            [
                'id'=>'6',
                'category_id'=>'2',
                'sub_category_name'=>'Jute handbags',
                'sub_category_name_bn'=>'Jute handbags',
                'short_description'=>' Product short description here',
                'link'=>'jute-handbags',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'6',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],
            [
                'id'=>'7',
                'category_id'=>'2',
                'sub_category_name'=>'Jute Purses',
                'sub_category_name_bn'=>'Jute Purses',
                'short_description'=>' Product short description here',
                'link'=>'jute-purses',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'7',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],
            [
                'id'=>'8',
                'category_id'=>'2',
                'sub_category_name'=>'Jute Basket',
                'sub_category_name_bn'=>'Jute Basket',
                'short_description'=>' Product short description here',
                'link'=>'jute-basket',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'8',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],

            [
                'id'=>'9',
                'category_id'=>'3',
                'sub_category_name'=>'Ladies Tops',
                'sub_category_name_bn'=>'Ladies Tops',
                'short_description'=>' Product short description here',
                'link'=>'ladies-tops',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'9',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],
            [
                'id'=>'10',
                'category_id'=>'3',
                'sub_category_name'=>'Mini skirts',
                'sub_category_name_bn'=>'Mini skirts',
                'short_description'=>' Product short description here',
                'link'=>'mini-skirts',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'10',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],
            [
                'id'=>'11',
                'category_id'=>'3',
                'sub_category_name'=>'Dresses',
                'sub_category_name_bn'=>'Dresses',
                'short_description'=>' Product short description here',
                'link'=>'dresses',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'11',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],
            [
                'id'=>'12',
                'category_id'=>'3',
                'sub_category_name'=>'Shirts',
                'sub_category_name_bn'=>'Shirts',
                'short_description'=>' Product short description here',
                'link'=>'shirts',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'12',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],
            [
                'id'=>'13',
                'category_id'=>'3',
                'sub_category_name'=>'Coats',
                'sub_category_name_bn'=>'Coats',
                'short_description'=>' Product short description here',
                'link'=>'coats',
                'icon_class'=>'fa fa-home',
                'serial_num'=>'13',
                'status'=>SubCategory::ACTIVE,
                'created_by'=>1,
            ],
        ];

        $subCategory=SubCategory::first();
        if (empty($subCategory)){
            SubCategory::insert($subCategories);
        }
    }
}
