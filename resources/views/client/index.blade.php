@extends('client.layouts.master')
@section('head')
    <title> Home | {{$setting->company_title}} </title>
    <meta name="description" content="{{$setting->company_}}" /><meta name="keywords" content=" " />
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('/client/assets')}}/javascript/so_home_slider/css/style.css">
    <link rel="stylesheet" href="{{asset('/client/assets')}}/javascript/so_home_slider/css/animate.css">
    <link rel="stylesheet" href="{{asset('/client/assets')}}/javascript/so_home_slider/css/owl.carousel.css">
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
        .item-inner >img{
            border-radius:50px;
        }
        .item-inner:hover img{
            transition: 1s;
            transform: scale(1.5);
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

                    <!--top Biggapon-->
                    @forelse($biggapons->where('place',\App\Models\Biggapon::TOP)->where('show_on_page',\App\Models\Biggapon::HOME_PAGE)->take(1) as $i=>$topBiggapon)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_llqj  col-style">
                            <div class="banners bannersb">
                                <div class="banner">
                                    <a href="{{URL::to($topBiggapon->target_url)}}"><img src="{{asset($topBiggapon->image)}}" alt="image"></a>
                                </div>
                            </div>
                        </div><!--end row-->
                    @empty
                    @endforelse
                </div>

            </div> <!--End Slider Container-->


            <div class="container page-builder-ltr">
                <div class="row row_7qar  row-style ">
            @forelse($biggapons->where('place',\App\Models\Biggapon::MIDDLE)->take(1)->where('show_on_page',\App\Models\Biggapon::HOME_PAGE) as $i=>$middleBiggapon)
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_llqj  col-style">
                    <div class="banners bannersb">
                        <div class="banner"><a href="{{URL::to($middleBiggapon->target_url)}}"><img src="{{asset($middleBiggapon->image)}}" alt="image"></a></div>
                    </div>
                </div><!--end row-->
        @empty
        @endforelse<!--end row-->
                </div>
            </div>

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
                                <div class="text-center">
                                    <a href="{{URL::to("product/category/$category->id?itemNo=$key")}}">
                                        <img src="{{asset($category->icon_photo?$category->icon_photo:'images/default/default-image-200x200.jpg')}}" class="img-responsive center-block category-image" width="80px">
                                        <p>{{$category->short_description}}</p>
                                    </a>

                                </div>

                                <div class="categoryslider-content hide-featured preset01-6 preset02-4 preset03-3 preset04-2 preset05-1">
                                    <div class="block-policy1">
                                        <ul>
                                            @forelse($category->subCategoryData as $subCategory)
                                                <li class="item-1">
                                                    <a href="{{URL::to("product/category/$category->id?sub_cat=$subCategory->link&itemNo=$key")}}" class="item-inner" title="{{$subCategory->sub_category_name}}">
                                                        {{--<i class="fa fa-book fa-2x"></i>--}}
                                                        <img src="{{asset($subCategory->icon_photo?$subCategory->icon_photo:'images/default/default.png')}}" title="{{$subCategory->sub_category_name}}" class="img-responsive center-block" width="50px">
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





        </div><!-- so-page-builder -->
    </div><!-- end content -->
    @include('client.layouts.partials.right-side-menu')
@endsection
@section('script')
    <script src="{{asset('/client/assets')}}/javascript/so_home_slider/js/owl.carousel.js"></script>
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

