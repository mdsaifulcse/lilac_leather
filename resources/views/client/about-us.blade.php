@extends('client.layouts.master')

@section('head')
    <title> About Us | {{$setting->company_name}} </title>
    <meta name="description" content="" /><meta name="keywords" content=" " />
@endsection


@section('style')

    @endsection

@section('content')

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{URL::to('/')}}">About Us</a></li>
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
                                                    <a href="javascript:;" title="" target="_self">
                                                        <img class="lazyload" src="" data-src="{{asset('/images/about-us/1.png')}}"  alt="slide 1" />
                                                    </a>
                                                    <div class="sohomeslider-description"> </div>
                                                </div>

                                                <div class="item">
                                                    <a href="javascript:;" title="" target="_self">
                                                        <img class="lazyload" src="" data-src="{{asset('/images/about-us/2.png')}}"  alt="slide 2" />
                                                    </a>
                                                    <div class="sohomeslider-description"> </div>
                                                </div>

                                                <div class="item">
                                                    <a href="javascript:;" title="" target="_self">
                                                        <img class="lazyload" src="" data-src="{{asset('/images/about-us/3.png')}}"  alt="slide 3" />
                                                    </a>
                                                    <div class="sohomeslider-description"> </div>
                                                </div>

                                                <div class="item">
                                                    <a href="javascript:;" title="" target="_self">
                                                        <img class="lazyload" src="" data-src="{{asset('/images/about-us/4.png')}}"  alt="slide 4" />
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
                    <div style="padding:35px 0px;font-family:'Poppins', sans-serif;">

                        <p>
                            Lilac Leather has been sustaining a strong business positioning in the Bangladesh jute & leather industry with its exclusive jute & leather products and client-centric management principles.
                        </p>
                        <p>The company does not deter from discharging its social and environmental responsibility, and ensures maintenance of its premises in the most eco-friendliest way.</p>
                        <p>
                            Over the years, the company has made smart investments on technology and installed sophisticated machinery and equipment across its various business units. The manufacturing cell is armed with latest machines and tools that aid in making the offered production in a smooth manner. Further, realizing our social & environmental responsibility, we have maintained our premises in the eco-friendly way.
                        </p>
                        <p>
                            It is the dedication and industrious efforts of our team members that empower us to meet the clients demands successfully. We are supported by creative craftsmen, designers, skilled workers, production supervisors, delivery personnel and sales professionals. They put their foot to serve the clients in the best manner and take the company business to great levels. Our employees are well versed with client’s requirements, business competition and market fluctuating trends. Their knowledge helps us to outmatch our client’s expectations and stay ahead in the marketplace.
                        </p>
                        {{--<?php--}}
                        {{--echo $setting->short_description;--}}
                        {{--?>--}}
                        {{--<br>--}}

                        {{--<?php--}}
                        {{--echo $setting->description;--}}
                        {{--?>--}}
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