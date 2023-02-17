@extends('client.layouts.master')
@section('head')
    <title> Home | {{$setting->company_title}} </title>
    <meta name="description" content="{{$setting->company_}}" /><meta name="keywords" content=" " />
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('/client/assets')}}/javascript/so_home_slider/css/style.css">
    <link rel="stylesheet" href="{{asset('/client/assets')}}/javascript/so_home_slider/css/animate.css">

    <style>
        .so-categories .card{min-height:194px;max-height:217px;border:1px solid #b8b8b8;margin-bottom:10px;}
        .card-horizontal {display: inline-flex;flex: 1 1 auto;}
        .card-horizontal .img-square-wrapper{padding: 5px; margin-right: 5px;max-width: 140px;margin: auto 5px;}
        .card-horizontal .card-body{padding:20px 5px;}
        .card-horizontal .card-body a{font-size:14px;display:block;padding:1px;}
        .card-horizontal .card-body a:first-child{color: black;font-weight: 500;padding-bottom: 6px;}
        .category-image{
            border-radius:50px;
        }
        .category-image +p{
            color:#6b137b;
            padding: 15px 10px;
        }
       .item-1 .item-inner >img{
            border-radius:100%;
        }
       .item-1 .item-inner:hover img{
            transition: 1s;
            transform: scale(1.2);
            border: 1px solid #280c2d;
        }
    </style>
@endsection
@section('content')
    <div id="content" class="">
        <div class="so-page-builder">
            <div class="container page-builder-ltr">
                <div class="row row_gw4 ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6s4m  slideshow-full">
                        <div class="row row_ki3w  row-style ">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="module sohomepage-slider">
                                    <div class="modcontent">
                                        <div id="sohomepage-slider1">
                                            <div class="so-homeslider sohomeslider-inner-1">
                                                <!-- Data come form CompanyServiceProvider -->
                                                @forelse($sliders as $slider)
                                                    <div class="item">
                                                        <a href="javascript:;" title="{{$slider->caption}}" target="_self">
                                                            <img class="lazyload"   src="" data-src="{{asset($slider->image)}}"  alt="slide 1" />
                                                        </a>
                                                        <div class="sohomeslider-description"> </div>
                                                    </div>
                                                @empty
                                                @endforelse
                                            </div>
                                        </div>
                                    </div> <!--/.modcontent-->
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<!--top Biggapon-->--}}
                    {{--@forelse($biggapons->where('place',\App\Models\Biggapon::TOP)->where('show_on_page',\App\Models\Biggapon::HOME_PAGE)->take(1) as $i=>$topBiggapon)--}}
                        {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_llqj  col-style">--}}
                            {{--<div class="banners bannersb">--}}
                                {{--<div class="banner">--}}
                                    {{--<a href="{{URL::to($topBiggapon->target_url)}}"><img src="{{asset($topBiggapon->image)}}" alt="image"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div><!--end row-->--}}
                    {{--@empty--}}
                    {{--@endforelse--}}
                </div>

            </div> <!--End Slider Container-->


            <!-- <div class="container page-builder-ltr">
                <div class="row row_7qar  row-style ">
            @forelse($biggapons->where('place',\App\Models\Biggapon::MIDDLE)->take(1)->where('show_on_page',\App\Models\Biggapon::HOME_PAGE) as $i=>$middleBiggapon)
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_llqj  col-style">
                    <div class="banners bannersb">
                        <div class="banner"><a href="{{URL::to($middleBiggapon->target_url)}}"><img src="{{asset($middleBiggapon->image)}}" alt="image"></a></div>
                    </div>
                </div>
        @empty
        @endforelse
                </div>
            </div> -->

            <div class="container page-builder-ltr">
                <div class="row row_7qar  row-style ">
                    @forelse($categories as $key=>$category)
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_4xg8  col-style">
                        <div id="featureBook" class=" so-category-slider container-slider module so-category-slider-ltr cate-slider1">
                            <h4 class="modtitle">{{__('frontend.item'.$key)}}</h4>

                            <div class="modcontent">
                                <div class="page-top">
                                    <div class="item-sub-cat"><ul><li> <a href="{{URL::to("product/categories?link=$category->link&itemNo=$key")}}" title="" target="_self">View All</a></li></ul></div>
                                </div>

                                @if($category->id==1)
                                    <!--top Biggapon if category index 0-->
                                        @forelse($biggapons->where('place',\App\Models\Biggapon::MIDDLE)->where('show_on_page',\App\Models\Biggapon::HOME_PAGE)->take(1) as $i=>$topBiggapon)
                                            
                                                <div class="banners bannersb">
                                                    <div class="banner">
                                                        <a href="{{URL::to($topBiggapon->target_url)}}"><img src="{{asset($topBiggapon->image)}}" alt="image"></a>
                                                    </div>
                                                </div>
                                        @empty
                                        @endforelse
                                    @endif
                                    @if($category->id==2)
                                    <!--middle Biggapon if category index 1-->
                                        @forelse($biggapons->where('place',\App\Models\Biggapon::TOP)->where('show_on_page',\App\Models\Biggapon::HOME_PAGE)->take(1) as $i=>$middleBiggapon)
                                            
                                            <div class="banners bannersb">
                                                <div class="banner">
                                                    <a href="{{URL::to($middleBiggapon->target_url)}}"><img src="{{asset($middleBiggapon->image)}}" alt="image"></a>
                                                </div>
                                            </div>
                                        @empty
                                        @endforelse
                                @endif
                                @if($category->id==3)
                                    <!--bottom Biggapon if category index 0-->
                                        @forelse($biggapons->where('place',\App\Models\Biggapon::BOTTOM)->where('show_on_page',\App\Models\Biggapon::HOME_PAGE)->take(1) as $i=>$bottomBiggapon)
                                            
                                                <div class="banners bannersb">
                                                    <div class="banner">
                                                        <a href="{{URL::to($bottomBiggapon->target_url)}}"><img src="{{asset($bottomBiggapon->image)}}" alt="image"></a>
                                                    </div>
                                                </div>
                                        @empty
                                        @endforelse
                                    @endif

                                {{--<div class="text-center">--}}
                                    {{--<a href="{{URL::to("product/category/$category->id?itemNo=$key")}}">--}}
                                        {{--<img src="{{asset($category->icon_photo?$category->icon_photo:'images/default/default-image-200x200.jpg')}}" class="img-responsive center-block category-image" width="88px">--}}
                                        {{--<p>{{$category->category_name}}</p>--}}
                                    {{--</a>--}}

                                {{--</div>--}}

                                <div class="categoryslider-content hide-featured preset01-6 preset02-4 preset03-3 preset04-2 preset05-1">
                                    <div class="block-policy1">
                                        <ul>
                                            @forelse($category->subCategoryData as $subCategory)
                                                <li class="item-1" style="{{$category->id==3?"width:20%":''}}">
                                                    <a href="{{URL::to("product/category/$category->id?sub_cat=$subCategory->link&itemNo=$key")}}" class="item-inner" title="{{$subCategory->sub_category_name}}">
                                                        {{--<i class="fa fa-book fa-2x"></i>--}}
                                                        <img src="{{asset($subCategory->icon_photo?$subCategory->icon_photo:'images/default/default.png')}}" title="{{$subCategory->sub_category_name}}" class="img-responsive center-block" width="140px">
                                                        <div class="content">

                                                            <strong> {{$subCategory->sub_category_name}} </strong>
                                                            <span>{{$subCategory->short_description}} </span>

                                                        </div>
                                                    </a>
                                                </li>
                                            @empty
                                                <li class="item-1">
                                                    <a href="javascript:;" class="item-inner">
                                                        <i class="fa fa-book fa-2x"></i>
                                                        <div class="content">
                                                            <b>No Data</b>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforelse

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                    @empty

                    @endforelse
                </div>
            </div>

            <!--Start Most Popular-->
            <div class="container page-builder-ltr">
                <div class="row row_7qar  row-style ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_4xg8  col-style"> <!-- end Shop by Categories row -->
                        <div id="mostPopular" class=" so-category-slider container-slider module so-category-slider-ltr cate-slider1">
                            <h4 class="modtitle">{{__('frontend.Most Popular')}}</h4>
                            <div class="modcontent">
                                <div class="page-top">
                                    <div class="item-sub-cat"><ul><li>
                                                <a href="{{URL::to('product/categories')}}" title="" target="_self">&nbsp;</a>
                                            </li></ul></div>
                                </div>
                                <div class="categoryslider-content hide-featured preset01-6 preset02-4 preset03-3 preset04-2 preset05-1">
                                    <div class="loading-placeholder"></div>
                                    <div class="slider category-slider-inner not-js cols-6 products-list" data-effect="none">
                                        @forelse($mostPopularProducts as $key=>$mostPopularProduct)
                                            <?php
                                            $discountPercent=0;
                                            $promotionSalePrice=0;
                                            if (isset($mostPopularProduct->productPromotion) && $mostPopularProduct->productPromotion->date_end>=date('Y-m-d'))
                                            {
                                                $discountPercent=$mostPopularProduct->productPromotion->promotion_by_percent;
                                                $promotionSalePrice=$mostPopularProduct->productPromotion->promotion_price;
                                            }
                                            ?>
                                            <div class="item">
                                                <div class="item-inner product-thumb transition product-layout product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block left-b">
                                                            <div class="product-image-container ">
                                                                <a class="lt-image" href="{{url('product/details/'.$mostPopularProduct->id."/$mostPopularProduct->name")}}" target="_self" title="{{$mostPopularProduct->name}}">
                                                                    <img data-sizes="auto" src="" data-src="{{asset($mostPopularProduct->productImages[0]->medium)}}" alt="{{$mostPopularProduct->name}}" class="lazyload">
                                                                </a>
                                                            </div>
                                                            @if($discountPercent>0)
                                                                <span class="label label-sale">- {{MyHelper::bn_number($discountPercent)}}%</span>
                                                            @endif
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="button-group cartinfo--static">
                                                                {!! Form::open(['route'=>'cart-products.store','method'=>'POST','class'=>'form-horizontal','files'=>false]) !!}
                                                                <input class="form-control" type="hidden" name="qty" value="1">
                                                                <input type="hidden" name="product_id" value="{{$mostPopularProduct->id}}">
                                                                <button class="addToCart" type="submit" title="{{__('frontend.Add to Cart')}}"><span>{{__('frontend.Add to Cart')}}</span></button>
                                                                <button class="wishlist btn-button" type="button" title="Add to Wish List - {{$mostPopularProduct->name}}"
                                                                        onclick='event.preventDefault();document.getElementById("wishListForm{{$mostPopularProduct->id}}").submit();'>
                                                                    <i class="fa fa-heart-o"></i><span>{{$mostPopularProduct->name}}</span>
                                                                </button>
                                                                {!! Form::close() !!}
                                                                <form id="wishListForm{{$mostPopularProduct->id}}" action="{{route('cart-products.store')}}" method="POST" style="display: none;">
                                                                    @csrf
                                                                    <input class="form-control" type="hidden" name="qty" value="1">
                                                                    <input class="form-control" type="hidden" name="type" value="{{\App\Models\CartProduct::WISHLIST}}">
                                                                    <input type="hidden" name="product_id" value="{{$mostPopularProduct->id}}">
                                                                </form>
                                                                {{--<button class="compare btn-button" type="button" title="Add to Compare" onclick="compare.add('95');"><i class="fa fa-retweet"></i><span>Add to Compare</span></button>--}}
                                                            </div>
                                                            <div class="caption hide-cont">
                                                                <div class="rate-history">
                                                                    <div class="ratings">
                                                                        <?php
                                                                        $maxReview=5;
                                                                        $averageReview=0;
                                                                        if (!empty($mostPopularProduct->product_review_avg_rating)){
                                                                            $averageReview=ceil($mostPopularProduct->product_review_avg_rating);
                                                                        }
                                                                        $inActiveStar=$maxReview-$averageReview;
                                                                        ?>
                                                                        <div class="rating-box">
                                                                            @for($x=0;$x<$averageReview;$x++)
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                            @endfor
                                                                            @for($x=0;$x<$inActiveStar;$x++)
                                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                            @endfor
                                                                        </div>
                                                                        <span class="rating-num">( {{$averageReview}} )</span>
                                                                    </div>
                                                                </div>
                                                                <h4>
                                                                    <a href="{{url('product/details/'.$mostPopularProduct->id."/$mostPopularProduct->name")}}" title="{{$mostPopularProduct->name}}" target="_self">
                                                                        <?php
                                                                        if (strlen($mostPopularProduct->name) != strlen(utf8_decode($mostPopularProduct->name)))
                                                                        {
                                                                            echo substr($mostPopularProduct->name,0,120);
                                                                        }else{
                                                                            echo substr($mostPopularProduct->name,0,60);
                                                                        }
                                                                        ?>
                                                                    </a>
                                                                </h4>
                                                            </div>

                                                            <div class="price">
                                                                @if($promotionSalePrice>0)
                                                                    <span class="price-new">{{$setting->currency}} {{MyHelper::bn_number($promotionSalePrice)}}</span>
                                                                    <span class="price-old">{{$setting->currency}} {{MyHelper::bn_number($mostPopularProduct->productStock->sale_price)}} </span>
                                                                @else
                                                                    <span class="price-new">{{$setting->currency}} {{MyHelper::bn_number($mostPopularProduct->productStock->sale_price)}}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="item">
                                                <div class="item-inner product-thumb transition product-layout product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block left-b">
                                                            <div class="product-image-container ">
                                                                <a class="lt-image" href="javascript:void (0)" target="_self" title="">
                                                                    <img data-sizes="auto" src="" data-src="{{asset('images/default/default.png')}}" alt="" class="lazyload">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption hide-cont">
                                                                <div class="rate-history"></div>
                                                                <h4><a href="javascript:void (0)" title="Incididunt picanha" target="_self">No Most Popular Product</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!--End Mos Popular-->



        </div><!-- so-page-builder -->
    </div><!-- end content -->
    @include('client.layouts.partials.right-side-menu')
@endsection
@section('script')

    {{--<![CDATA[  Most Popular--}}
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            (function (element) {
                var id = $("#mostPopular");
                var $element = $(element),
                    $extraslider = $(".slider", $element),
                    $featureslider = $('.product-feature', $element),
                    _delay = 500,
                    _duration = 800,
                    _effect = 'none',
                    total_item = 10;

                var width_window = $(window).width();

                $(window).on('load', function() {
                    $extraslider.on("initialized.owl.carousel2", function () {
                        var $item_active = $(".slider .owl2-item.active", $element);
                        if ($item_active.length > 1 && _effect != "none") {
                            _getAnimate($item_active);
                        }
                        else {
                            var $item = $(".owl2-item", $element);
                            $item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                        }
                        $extraslider.show();
                        $('.loading-placeholder', id).hide();
                    }).owlCarousel2({
                        lrt: false,
                        margin: 20,
                        slideBy: 1,
                        autoplay: 0,
                        autoplayHoverPause: 0,
                        autoplayTimeout: 0,
                        autoplaySpeed: 1000,
                        startPosition: 0,
                        mouseDrag: 1,
                        touchDrag: 1,
                        autoWidth: false,
                        responsive: {
                            0:{	items: 2,
                                nav: total_item <= 1 ? false : ((true) ? true: false),
                            },
                            480:{ items: 2,
                                nav: total_item <= 2 ? false : ((true) ? true: false),
                            },
                            768:{ items: 3,
                                nav: total_item <= 3 ? false : ((true) ? true: false),
                            },
                            992:{ items: 4,
                                nav: total_item <= 4 ? false : ((true) ? true: false),
                            },
                            1200:{ items: 5,
                                nav: total_item <= 4 ? false : ((true) ? true: false),
                            }
                        },
                        nav: true,
                        loop: true,
                        navSpeed: 500,
                        navText: ["&#139;", "&#155;"],
                        navClass: ["owl2-prev", "owl2-next"]
                    });

                    var height_slider = $('.slider', id).outerHeight();
                    if (width_window > 1200) {
                        $('.item-cat-image', id).css('min-height', height_slider-20);
                    }
                    else {
                        $('.item-cat-image', id).removeAttr('style');
                    }

                    $( window ).resize(function() {
                        var width_window = $(window).width();
                        if (width_window > 1200) {
                            $('.item-cat-image', id).css('min-height', height_slider-20);
                        }
                        else {
                            $('.item-cat-image', id).removeAttr('style');
                        }
                    })
                });

            })("#mostPopular");
        });
        //]]>
    </script>
    <!-- slider Active -- sohomeslider-inner-1-->
    <script type="text/javascript">
        var total_item = 3 ;
        $(".sohomeslider-inner-1").owlCarousel2({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed:  1000,
            smartSpeed: 500,
            autoplayHoverPause: true,
            startPosition: 0,
            mouseDrag:  true,
            touchDrag: true,
            dots: true,
            autoWidth: false,
            dotClass: "owl2-dot",
            dotsClass: "owl2-dots",
            nav: true,
            loop: true,
            navSpeed: 500,
            navText: ["&#139;", "&#155;"],
            navClass: ["owl2-prev", "owl2-next"],
            responsive: {
                0:{ items: 1,
                    nav: total_item <= 1 ? false : ((false ) ? true: false),
                },
                480:{ items: 1,
                    nav: total_item <= 1 ? false : ((false ) ? true: false),
                },
                768:{ items: 1,
                    nav: total_item <= 1 ? false : ((false ) ? true: false),
                },
                992:{ items: 1,
                    nav: total_item <= 1 ? false : ((false ) ? true: false),
                },
                1200:{ items: 1,
                    nav: total_item <= 1 ? false : ((false ) ? true: false),
                }
            },
        });
    </script>

@endsection

