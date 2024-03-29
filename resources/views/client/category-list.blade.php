@extends('client.layouts.master')

@section('head')
    <title> {{__('Category List Show')}} | {{$setting->company_name}}</title>
    <meta name="description" content="" /><meta name="keywords" content=" " />
@endsection

@section('style')
    <style>
        .authorListText{
            font-size: 16px;
            font-weight: 300;
            text-align: justify;
            color: #8f9495;
            padding: 40px 0;
        }

        /* Author Search */

        .authSearchArea {
            padding: 13px 0;
            border-bottom: 1px solid #CDCDCD;
            border-top: 1px solid #CDCDCD;
            width: 100%;
            text-align: center;
        }
        .authSearchArea>ul {
            margin: 0;
            line-height: 36px;
        }
        .list-inline>li {
            display: inline-block;
            padding-right: 5px;
            padding-left: 5px;
        }
        .authSearchArea>ul>li>h1 {
            font-size: 20px;
            font-weight: 300;
            color: #444546;
            margin: 0;
            line-height: 30px;
        }

        /*Author list*/
        .authorList {
            font-size: 0;
            margin: 15px -15px 35px;
        }
        .authorList>li {
            vertical-align: top;
            padding: 15px;
            width: 234px;
            text-align: center;
            position: relative;
            font-size: 14px;
        }
        .authorList>li>a {
            width: 100%;
            display: inline-block;
            padding: 0;
        }
        img.authorImg {
            border: 2px solid #c7c7c7;
            border-radius: 50%;
            height: 140px;
            width: 140px;
            margin: 0 auto;
            display: block;
        }
        .authorList>li>a>h2 {
            font-size: 15px;
            font-weight: 500;
            text-align: center;
            margin-top: 12px;
            margin-bottom: 30px;
        }
        .authorHover {
            position: absolute;
            left: 0;
            display: none;
            text-align: left;
            bottom: 155px;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            width: 100%;
            -webkit-box-shadow: 0 0 4px 0 rgb(158 150 158 / 70%);
            -moz-box-shadow: 0 0 4px 0 rgba(158,150,158,0.7);
            box-shadow: 0 0 4px 0 rgb(158 150 158 / 70%);
            animation: display-none-transition 0.5s;
        }
        .authorList>li>a:hover .authorHover {
            display: block;
            opacity: 1;
        }
        .hoverArow {
            text-align: center;
            margin-bottom: -35px;
        }
        .hoverArow>i {
            font-size: 30px;
            color: #f9f9f9;
            text-shadow: rgb(158 150 158 / 56%) 0 1px;
        }
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
    <script src="{{asset('/client/assets')}}/javascript/jquery/jquery-2.1.1.min.js"></script>
    <!-- for taging -->
    <link rel="stylesheet" href="{{asset('/tagging/css/jqueryui1.12.1-ui.css')}}">
    <link rel="stylesheet" href="{{asset('/tagging/css/jquery.tagit.css')}}">
    <link rel="stylesheet" href="{{asset('/tagging/css/tagit.ui-zendesk.css')}}">

    <?php $currency=$setting->currency;?>
    <div class="breadcrumbs ">
        <div class="container">
            <div class="current-name">
                {{__('frontend.Author')}}
            </div>
            <ul class="breadcrumb">
                <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="javascript:void(0)">{{__('frontend.Product')}}</a></li>
                <li><a href="{{URL::to("/product/categories?itemNo=$request->itemNo")}}">{{__('frontend.Category Name Bn')}}</a></li>
                <li><a href="javascript:void(0)">{{__('frontend.item'.$request->itemNo)}}</a></li>
            </ul>
        </div>
    </div> <!-- end breadcrumbs-->
    <div class="content-main container product-detail ">
        <div class="row" style="position: relative;">
            {{--<div id="content" class="product-view col-md-12 col-sm-12 col-xs-12">--}}
                {{--<img src="{{asset('images/default/allcategory.png')}}" alt="" class="authorBannerImg">--}}
                {{--<p class="authorListText">--}}
                    {{--ললক্ষাধিক বইয়ের সংগ্রহ {{$setting->company_name}} ডট কমে বইয়ের এই বিশাল সমুদ্র-মন্থনে পাঠকের সুবিধার্থে প্রায় ৫০ টির মতো ক্যাটাগরি ও সহস্রাধিক বিষয়ভিত্তিক ক্যাটাগরি রয়েছে {{$setting->company_name}} ডট কমে যার ফলে খুব সহজেই পাঠক তার পছন্দের ক্যাটাগরি বেছে নিয়ে নির্দিষ্ট বিষয়ভিত্তিক বইগুলো খুঁজে পাবে খুব সহজেই। {{$setting->company_name}} ডট কমের এই বিশাল বইয়ের সমুদ্রে জ্ঞানের জাহাজের নাবিক হতে আপনাকে নিমন্ত্রণ। মানচিত্রটা ধরা আছে নিচেই...।--}}
                {{--</p>--}}
            {{--</div>--}}

            <div class="product-view col-md-12 col-sm-12 col-xs-12">
                <div class="authSearchArea">
                    <ul class="list-inline list-unstyled text-center">
                        <li><h1>{{__('frontend.Search your favorite category')}}</h1></li>
                        <li>
                            <form class="navbar-form" role="search" action="{{URL::to('product/category/')}}" method="GET">
                                <div class="form-group base searchFormArea">
                                    <input type="text" id="categoryField" name="category" class="form-control searchInput ui-autocomplete-input" placeholder="Enter your keyword" autocomplete="off" style="display:none;">

                                    <ul id="categoryFieldUl" style="display:inline-flex;"></ul>
                                    <span class="locationError text-danger"> </span>
                                    <button type="submit" class="btn btnSearchSubmit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- -------------- -->

            <div class="container page-builder-ltr">
                <div class="row row_7qar  row-style ">
                    @forelse($categories as $category)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_4xg8  col-style">
                            <div id="featureBook" class=" so-category-slider container-slider module so-category-slider-ltr cate-slider1">
                                <h4 class="modtitle">{{__('frontend.item'.$request->itemNo)}}</h4>

                                <div class="modcontent">

                                    <div class="text-center">
                                        <a href="{{URL::to("product/category/$category->id?itemNo=$request->itemNo")}}">
                                            <img src="{{asset($category->icon_photo?$category->icon_photo:'images/default/default-image-200x200.jpg')}}" class="img-responsive center-block category-image" width="80px">
                                            <p>{{$category->short_description}}</p>
                                        </a>
                                    </div>

                                    <div class="categoryslider-content hide-featured preset01-6 preset02-4 preset03-3 preset04-2 preset05-1">
                                        <div class="block-policy1">
                                            <ul>
                                                @forelse($category->subCategoryData as $subCategory)
                                                    <li class="item-1">
                                                        <a href="{{URL::to("product/category/$category->id?sub_cat=$subCategory->link&itemNo=$request->itemNo")}}" title="{{$subCategory->sub_category_name}}" class="item-inner">
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

            <!-- -------------- -->



            {{--<div class="product-view col-md-12 col-sm-12 col-xs-12">--}}
                {{--<ul class="list-inline list-unstyled authorList">--}}
                    {{--@forelse($categories as $category)--}}
                    {{--<li>--}}
                        {{--<a href="{{URL::to('/product/category/'.$category->id)}}" title="{{$category->category_name_bn}}">--}}
                        {{--@if($category->icon_photo!=null and file_exists($category->icon_photo))--}}
                            {{--<img class="img-fluid img-circle img-responsive center-block" src="{{asset($category->icon_photo)}}" alt="{{$category->category_name_bn}}" title="{{$category->category_name_bn}}">--}}
                        {{--@else--}}
                            {{--<img class="img-fluid img-circle img-responsive center-block" src="{{asset('images/default/author.png')}}" alt="{{$category->category_name_bn}}" title="{{$category->category_name_bn}}">--}}
                        {{--@endif--}}

                            {{--<h2>  {{$category->category_name_bn}}</h2>--}}
                            {{--<div class="authorHover">--}}
                                {{--<p class="hoverName">Name:   {{$category->category_name_bn}}</p>--}}
                                {{--<p class="hoverArow"><i class="fa fa-caret-down"></i></p>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                        {{--@empty--}}

                    {{--@endforelse--}}
                {{--</ul>--}}
                {{--<div class="product-filter product-filter-bottom filters-panel">--}}
                    {{--<div class="row">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12 text-center">{!! $categories->links() !!}</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('/client/assets')}}/javascript/so_home_slider/js/owl.carousel.js"></script>
    <script src="{{asset('/tagging/js/jquery-1.12.1-ui.min.js')}}"></script>
    <script src="{{asset('/tagging/js/tag-it.min.js')}}"></script>

    <script>
        $(function(){
            $('#categoryFieldUl').tagit({
                // This will make Tag-it submit a single form value, as a comma-delimited field.
                singleField: true,
                singleFieldNode: $('#categoryField'),
                allowSpaces: true,
                fieldName:"location",
                tagLimit:1,
                placeholderText:"অনুসন্ধান করুন",
                //autocomplete: {source:country_list},
                autocomplete: {
                    source: function( request, response ) {
                        $.ajax({
                            url: "{{URL::to('/product/search-category')}}",
                            dataType: "json",
                            data: {
                                q: request.term
                            },
                            success: function( data ) {
                                response( data );
                            }
                        });
                    },
                },
            });
        });
    </script>
    @endsection