<footer class="footer-container typefooter-2">

    <div class="footer-main collapse description-has-toggle" id="collapse-footer">

        <div class="so-page-builder">
            <div class="container page-builder-ltr">
                <div class="row row_p2b9  footer-middle ">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col_4202  col-style">
                        <div class="infos-footer">
                            {{--<a href="{{url('/')}}">--}}
                                {{--<img src="{{asset($setting->logo)}}"  data-src="{{asset($setting->logo)}}" title="{{$setting->company_name}} " alt="{{$setting->company_name}}"--}}
                                     {{--style="width: 90px;margin-left:10%;border-radius:50%;"></a>--}}
                            <ul>
                                <li class="adres">
                                   Address: <?php echo nl2br($setting->address1);?>
                                </li>
                                <li class="phone">
                                   Mobile: {{$setting->mobile_no1}}
                                </li>
                                
                                <li class="mail">
                                   Email: {{$setting->email1}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 col_6urb  col-clear2">
                        <div class="box-information box-footer" style="background-color:#ffffff;">
                            <div class="module clearfix">

                                <div class="modcontent">
                                    <ul class="menu" style="padding-left:12%;">
                                        {{--@forelse($socials as $social)--}}
                                            {{--<li class="facebook">--}}
                                                {{--<a href="{{URL::to($social->link)}}" target="_blank">--}}
                                                    {{--<i class="{{$social->icon_class}}"></i> <span>{{$social->name}}</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--@empty--}}
                                        {{--@endforelse--}}
                                        {!! QrCode::size(120)->generate(Request::url()); !!}
                                        <p>Scan & Visit Site</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 col_6urb  col-clear2">
                        <div class="box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">{{__('frontend.INFORMATION')}}</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="{{URL::to('/about-us.html')}}">{{__('frontend.About Us')}}</a></li>
                                        <li><a href="{{URL::to('mission-vision.html')}}">{{__('frontend.mission-vision')}}</a></li>
                                        <li><a href="{{URL::to('/contact.htm')}}">{{__('frontend.Contact Us')}}</a></li>
                                        <li><a href="{{URL::to('/page/privacy-policy')}}">{{__('frontend.Privacy Policy')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col_kbk9  col-newsl">
                        <div class="row row_acvu  row-style ">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_vib1 col-style">
                                <div class="module newsletter-footer1">
                                    <div class="newsletter" style="width:100%      ;  ; ">
                                        <div class="title-block">
                                            <div class="page-heading font-title">
                                                {{__('frontend.SIGN UP FOR NEWSLETTER')}}
                                            </div>
                                            <div class="promotext">{{__('frontend.We’ll never share your email address with a third-party.')}} </div>
                                        </div>
                                        <div class="block_content">
                                            {!! Form::open(['url' => 'news-letter-save','class'=>'form-group form-inline signup send-mail','method'=>'POST','files'=>false]) !!}
                                                <div class="form-group">
                                                    <div class="input-box">
                                                        <input type="email" name="email" placeholder="{{__('frontend.Your email address')}}..." value="" class="form-control" id="txtemail" size="55" required>
                                                    </div>
                                                    <div class="subcribe">
                                                        <button class="btn btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                                            {{__('frontend.Subscribe')}}
                                                        </button>
                                                    </div>
                                                </div>
                                            {!! Form::close(); !!}
                                        </div> <!--/.modcontent-->
                                    </div>
                                </div>
                            </div>
                            {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_f250 col-style">
                                <ul class="apps">
                                    <li>
                                        <a href="javascript:void(0)"><img src="{{asset('client')}}/images/catalog/demo/payment/app-1.png" alt="image"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="{{asset('client')}}/images/catalog/demo/payment/app-2.png" alt="image"></a>
                                    </li>
                                </ul>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="container page-builder-ltr">
                <div class="row row_wqs0  row-style ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_in3d  col-style">
                        <div class="middle-content">
                            <div class="des">
<!--                               --><?php //echo $setting->short_description;?>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>


    </div>
    <div class="description-toggle hidden-lg hidden-md">
        <a class="showmore" data-toggle="collapse" href="layout2.html#collapse-footer" aria-expanded="false" aria-controls="collapse-footer">
            <span class="toggle-more">Show More <i class="fa fa-angle-down"></i></span>
            <span class="toggle-less">Show Less <i class="fa fa-angle-up"></i></span>
        </a>
    </div>



    <div class="footer-bottom ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 copyright-w">
                    <div class="copyright0">
                        <h5 class="copyright-title text-center">{{$setting->company_name}} {{$setting->copyright}}{{__('frontend.All Rights Reserved. Designed by')}}  <a href="https://inovexidea.com" target="_blank" type="INovex Idea Solution Ltd."> INovex Idea Solution Ltd. </a></h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>