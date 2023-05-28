@extends('client.layouts.master')

@section('head')
    <title>Our Values | {{$setting->company_name}} </title>
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
            <li><a href="{{URL::to('/')}}">Our Values</a></li>
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
                                                    <a href="javascript:;" title="Our Values" target="_self">
                                                        <img class="lazyload" src="" data-src="{{asset('/images/about-us/4.png')}}"  alt="Our Values" />
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
                        <h2><u>OUR VALUES</u></h2>
                        <h3>To our customers we offer</h3>
                        <ul class="our-values-details">
                            <li><i class="fa fa-star"></i> A commitment to provide best quality product and timely delivery</li>
                            <li><i class="fa fa-star"></i> Production of world-class quality leather, meet the requirements of customers with competitive price and up to date fashion trends. </li>
                            <li><i class="fa fa-star"></i> Quick response to the expectations of our valued customers in terms of quality and product development</li>
                        </ul>

                        <h3>To our employees we offer</h3>
                        <ul class="our-values-details">
                            <li><i class="fa fa-star"></i> A desirable and rewarding place to work</li>
                            <li><i class="fa fa-star"></i> Provide motivation for team work and career development </li>
                            <li><i class="fa fa-star"></i> The opportunity to grow to employee’s maximum potential</li>
                            <li><i class="fa fa-star"></i> Sufficient offsite and on the job training</li>
                        </ul>
                        <h3>To our shareholders we offer</h3>
                        <ul class="our-values-details">
                            <li><i class="fa fa-star"></i> Attractive return with minimum risk of their investment</li>
                            <li><i class="fa fa-star"></i> A commitment to continuous improvement and adding value through all activities and managing resources. </li>
                        </ul>
                        <h3>To our suppliers we offer</h3>
                        <ul class="our-values-details">
                            <li><i class="fa fa-star"></i> Easy terms of trade</li>
                            <li><i class="fa fa-star"></i> Payment within due time </li>
                        </ul>
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