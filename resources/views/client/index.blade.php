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
    </style>
@endsection
@section('content')
    <div id="content" class="">
        <div class="so-page-builder">
            <div style="margin-bottom:15px;">
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
                                                                <img class="lazyload"   src="" data-src="{{asset($slider->image)}}"  alt="{{$slider->caption}}" />
                                                            </a>
                                                            <div class="sohomeslider-description"> </div>
                                                        </div>
                                                    @empty
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div> <!--/.modcontent-->
                                        <div class="form-group">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!--End Slider Container-->
            </div>


            <div class="container page-builder-ltr">
                <div class="row row_7qar  row-style ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_vnrl  col-style">
                        <!--[if gt IE 9]><!-->
                        <div class="so-categories module theme3 custom-slidercates" style="margin-top:30px;marign-bottom:15px;">
                            <h3 class="modtitle text-center"><span>{{__('frontend.Shop by Categories')}}</span></h3>
                            <div class="form-group"> <a class="viewall" href="{{URL::to('/book/categories')}}">View All</a></div>
                            <div class="container">
                                <div class="row">
                                    <?php $i=0;?>
                                    @forelse($categories->chunk(7) as $j=>$categorie)
                                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 ">
                                            <div class="card">
                                                <div class="card-horizontal">
                                                    <div class="img-square-wrapper hidden-xs">
                                                        @if(isset($categories[$i]))
                                                            <a href="{{URL::to('/book/category/'.$categories[$i]->id.'?ref='.$categories[$i]->category_name)}}"><img class="img-responsive" src="{{asset($categories[$i]->icon_photo)}}" alt="{{$categories[$i]->category_name_bn}}"></a>
                                                        @else
                                                            <img class="img-responsive" src="http://via.placeholder.com/300x180" alt="Card image cap">
                                                        @endif
                                                    </div>
                                                    <div class="card-body">
                                                        @foreach($categorie as $k=>$value)
                                                            <a href="{{URL::to('/book/category/'.$value->id.'?ref='.$value->category_name)}}" class="card-text">{{$value->category_name_bn}}</a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i+=7;?>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div><!-- end Shop by Categories row -->

                    <div id="register-login-profile">
                        <div class="container">
                            <div class="register-login">
                                <div class="row">
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
                            </div>
                        </div>
                    </div>
                    {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_pfg8  col-style" style="display:none;">--}}
                        {{--<div class="block-policy1">--}}
                            {{--<ul>--}}
                                {{--<li class="item-3">--}}
                                    {{--<a href="javascript:;" class="item-inner">--}}
                                        {{--<i class="fa fa-truck fa-2x"></i>--}}
                                        {{--<div class="content">--}}
                                            {{--<b>ডেলিভারি চার্জ সম্পূর্ণ ফ্রি</b>--}}
                                            {{--<span>২৪ ঘন্টার মধ্যে হোম ডেলিভারি</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="item-4">--}}
                                    {{--<a href="javascript:;" class="item-inner">--}}
                                        {{--<i class="fa fa-gift fa-2x"></i>--}}
                                        {{--<div class="content">--}}
                                            {{--<b>প্যাকেজ ক্রয়-বিক্রয়ে বিশেষ সুযোগ</b>--}}
                                            {{--<span>প্যাকেজে বই ক্রয়-বিক্রয়ে রয়েছে আকর্ষণীয় গ্রিফ্ট</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="item-1">--}}
                                    {{--<a href="javascript:;" class="item-inner">--}}
                                        {{--<i class="fa fa-book fa-2x"></i>--}}
                                        {{--<div class="content">--}}
                                            {{--<b>সেরা পাবলিকেশনস</b>--}}
                                            {{--<span>প্রায় ৩ হাজার বই এর এক বিশেষ সমাহার</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="item-2">--}}
                                    {{--<a href="javascript:;" class="item-inner">--}}
                                        {{--<i class="fa fa-cart-plus fa-2x"></i>--}}
                                        {{--<div class="content">--}}
                                            {{--<b>বাংলাদেশের যেকোন প্রান্ত থেকে অর্ডার করুন</b>--}}
                                            {{--<span>রয়েছে সর্বোচ্চ ৫০% প্রর্যন্ত ডিসকাউন্ট</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}

                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>
            </div>
            <!--End Feature Container -->

        </div>
    </div>
    @include('client.layouts.partials.right-side-menu')
@endsection
@section('script')
    <script src="{{asset('/client/assets')}}/javascript/so_home_slider/js/owl.carousel.js"></script>
    <!-- slider Active -- sohome slider-inner-1-->
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

    <script type="text/javascript">
        //<![CDATA[ New Product
        jQuery(document).ready(function ($) {
            (function (element) {
                var id = $("#newProduct");
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
                            0:{ items: 2,
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

            })("#newProduct");
        });
        //]]>
    </script>

    <script type="text/javascript">
        //<![CDATA[ HEALTH & BEAUTY
        jQuery(document).ready(function ($) {
            jQuery(document).ready(function ($) {
                ;(function (element) {
                    var id = $("#so_category_slider_191");
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
                            // var $navpage = $(".page-top .page-title-categoryslider span", id);
                            // $(".slider .owl2-controls", id).insertAfter($navpage);
                            // $(".slider .owl2-dot", id).css("display", "none");

                        }).owlCarousel2({
                            rtl: false,
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
                                0:{ items: 2,
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

                })("#so_category_slider_191");
            });

        });
        //]]>
    </script>

@endsection

