@extends('client.layouts.master')

@section('head')
    <title>Vision, Mission and Values | {{$setting->company_name}} </title>
    <meta name="description" content="" /><meta name="keywords" content=" " />
@endsection


@section('style')
    <style>
        .our-values-details{
            text-indent: 10px;
            padding-bottom: 30px;
        }
    </style>
    @endsection

@section('content')

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{URL::to('/')}}">Our Vision, Mission</a></li>
        </ul>

    <section class="box-white" style="margin-top: 0px;">
        <div class="container">
            <div class="box-white padding15 marginTopBottom20">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6s4m  slideshow-full">
                        <div class="row row_ki3w  row-style ">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="module sohomepage-slider">
                                    <div class="modcontent">
                                        <div id="sohomepage-slider1">
                                            <div class="so-homeslider sohomeslider-inner-1">
                                                <!-- Data come form CompanyServiceProvider -->
                                                <div class="item">
                                                    <a href="javascript:;" title="Our Vision, Mission" target="_self">
                                                        <img class="lazyload" src="" data-src="{{asset('/images/about-us/3.png')}}"  alt="Our Vision, Mission" />
                                                    </a>
                                                    <div class="sohomeslider-description"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!--/.modcontent-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-white paddingBottom20">
        <div class="container">
            <div class="row">
                {{--<div class="col-sm-4 text-center">--}}
                    {{--<img alt="Demoonews.com" src="{{asset('/client')}}/media/common/placeholder-xs.png" data-src="{{asset($setting->logo)}}" class="lazyload" style="width:100%;">--}}
                {{--</div>--}}
                <div class="col-sm-12">
                    <div style="padding:35px 0px;">
                        <h2><u>OUR VISION</u></h2>
                        <p>
                            Our vision is to become an inspiration for global brands by attaining 100% customer satisfaction worldwide through continual quality improvement of our products.
                        </p>
                        <br>
                        <h2><u>OUR MISSION</u></h2>

                        <p>To understand and satisfy customer’s wants and needs, we always try to add value, reduce costs and provide innovative thinking for improvement of our product quality, with world class compliance and working standards.
                        </p>
                        <p>Our mission is to manufacture beautiful, high-quality jute & Leather handicraft, jewelry, fashionwear, Bag etc. that empower artisans and encourage responsible consumption.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>

    @endsection


@section('script')
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