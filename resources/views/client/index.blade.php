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
                                    <div class="form-group">
                                    </div>
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

                    @forelse($categories as $category)
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_vnrl  col-style">
                        <!--[if gt IE 9]><!-->
                        <div class="so-categories module theme3 custom-slidercates" style="margin-top:30px;marign-bottom:15px;">
                            <h3 class="modtitle text-center"><span>{{__('frontend.Shop by Categories')}}</span></h3>
                            <p>{{$category->short_description}}  </p>
                            <div class="form-group"> <a class="viewall" href="{{URL::to('/book/categories')}}">View All</a></div>
                            <div class="container">
                                <div class="row">
                                    <div class="block-policy1">

                                        <ul>
                                            @forelse($category->subCategoryData as $subCategory)
                                            <li class="item-1">
                                                <a href="javascript:;" class="item-inner">
                                                    {{--<i class="fa fa-facebook fa-2x"></i>--}}
                                                    <img src="{{asset($subCategory->icon_photo)}}" class="img-responsive center-block" width="50px">
                                                    <div class="content">
                                                        <b>{{$subCategory->sub_category_name}}</b>
                                                        <span>{{$subCategory->short_description}}</span>
                                                    </div>
                                                </a>
                                            </li>
                                            @empty
                                                <li class="item-1">
                                                    <a href="javascript:;" class="item-inner">
                                                        {{--<i class="fa fa-facebook fa-2x"></i>--}}
                                                        <div class="content">
                                                            <b>No Sub Cat Data</b>
                                                            <span> No Data</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                        @empty
                    @endforelse
                    <!-- end col-lg/md -->

                </div>
                <!-- end Shop by Categories row -->
            </div>
            <!--End Feature Container -->



        </div>
    </div>
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

    <script type="text/javascript">
        //<![CDATA[ Feature Book
        jQuery(document).ready(function ($) {
            ;(function (element) {
                var id = $("#featureBook");
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

            })("#featureBook");
        });
        //]]>
    </script>


    <script type="text/javascript">
        //<![CDATA[ Bongobondho Bangladesh Indipendent
        jQuery(document).ready(function ($) {
            (function (element) {
                var id = $("#bongobondhoBangladeshIndependent");
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

            })("#bongobondhoBangladeshIndependent");
        });
        //]]>
    </script>
    <script type="text/javascript">
        //<![CDATA[ Bongobondho Bangladesh Indipendent
        jQuery(document).ready(function ($) {
            (function (element) {
                var id = $("#bongobondhoPopular");
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

            })("#bongobondhoPopular");
        });
        //]]>
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

            })("#newProduct");
        });
        //]]>
    </script>
    <script type="text/javascript">
        //<![CDATA[ readingListBooks
        jQuery(document).ready(function ($) {
            (function (element) {
                var id = $("#readingListBooks");
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

            })("#readingListBooks");
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

                })("#so_category_slider_191");
            });

        });
        //]]>
    </script>

    <script type="text/javascript">
        //<![CDATA[  Storey, Poit, Novel
        jQuery(document).ready(function ($) {
            (function (element) {
                var id = $("#StoriesNovelpPoems");
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

            })("#StoriesNovelpPoems");
        });
        //]]>
    </script>
    <script type="text/javascript">
        //<![CDATA[  Most Popular
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

    <script type="text/javascript">
        //<![CDATA[ Top Rated
        jQuery(document).ready(function ($) {
            ;(function (element) {
                var id = $("#topRatedBook");
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
                        rtl: false,
                        margin: 30,
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
                            768:{ items: 2,
                                nav: total_item <= 2 ? false : ((true) ? true: false),
                            },
                            992:{ items: 3,
                                nav: total_item <= 3 ? false : ((true) ? true: false),
                            },
                            1200:{ items: 3,
                                nav: total_item <= 3 ? false : ((true) ? true: false),
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

            })("#topRatedBook");
        });
        //]]>
    </script>

@endsection

