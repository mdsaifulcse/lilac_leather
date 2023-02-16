<div id="so-groups" class="right so-groups-sticky hidden-xs" style="top: 196px">
    <a class="sticky-mycart" data-target="popup" data-popup="#popup-language"><span>Language</span><i class="fa fa-language"></i></a>
    <a class="sticky-categories" data-target="popup" data-popup="#popup-categories"><span>Categories</span><i class="fa fa-align-justify"></i></a>
    {{--<a class="sticky-myaccount" data-target="popup" data-popup="#popup-myaccount"><span>Account</span><i class="fa fa-user"></i></a>--}}
    {{--<a class="sticky-mysearch" data-target="popup" data-popup="#popup-mysearch"><span>Search</span><i class="fa fa-search"></i></a>--}}
    {{--<a class="sticky-recent" data-target="popup" data-popup="#popup-recent"><span>Recent View</span><i class="fa fa-recent"></i></a>--}}

    <div class="popup popup-categories popup-hidden" id="popup-categories">
        <div class="popup-screen">
            <div class="popup-position">
                <div class="popup-container popup-small">
                    <div class="popup-header">
                        <span><i class="fa fa-align-justify"></i>All Categories</span>
                        <a class="popup-close" data-target="popup-close" data-popup-close="#popup-categories">&times;</a>
                    </div>
                    <div class="popup-content">
                        <div class="nav-secondary">
                            <ul>
                                @forelse($categories as $key=>$category)

                                <li>
                                    @if(count($category->subCatAsSubMenu)>0)
                                    <span class="nav-action">
                                        <i class="fa fa-plus more"></i>
                                        <i class="fa fa-minus less"></i>
                                    </span>
                                    @endif

                                    <a href="{{url('/product/category/'.$category->id.'?ref'.$category->category_name."&itemNo=$key")}}"><i class="fa fa-chevron-down nav-arrow"></i>{{$category->category_name}}</a>

                                    <ul class="level-2">
                                        @forelse($category->subCatAsSubMenu as $subMenuData)
                                        <li>
                                            <a href="{{url('/product/category/'.$category->id.'?sub_cat='.$subMenuData->link."&itemNo=$key")}}"><i class="fa fa-chevron-right flip nav-arrow"></i>{{$subMenuData->sub_category_name}}</a>
                                        </li>
                                        @empty
                                        @endforelse
                                    </ul>

                                </li>

                                @empty
                                @endforelse

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup popup-language popup-hidden" id="popup-language">
        <div class="popup-screen">
            <div class="popup-position">
                <div class="popup-container popup-small">
                    <div class="popup-html">
                        <div class="popup-header">
                            <span><i class="fa fa-language"></i>Select Language</span>
                            <a class="popup-close" data-target="popup-close" data-popup-close="#popup-language">&times;</a>
                        </div>
                        <div class="popup-content">
                            <div class="nav-secondary">
                                <ul>
                                    <li>

                                        <a href="{{url('/localization/en')}}"><i class="fa fa-chevron-down nav-arrow"></i>English</a>
                                        <a href="{{url('/localization/it')}}"><i class="fa fa-chevron-down nav-arrow"></i>Italian</a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup popup-myaccount popup-hidden" id="popup-myaccount">
        <div class="popup-screen">
            <div class="popup-position">
                <div class="popup-container popup-small">
                    <div class="popup-html">
                        <div class="popup-header">
                            <span><i class="fa fa-user"></i>My Account</span>
                            <a class="popup-close" data-target="popup-close" data-popup-close="#popup-myaccount">&times;</a>
                        </div>
                        <div class="popup-content">
                            <div class="form-content">
                                <div class="row space">
                                    <div class="col col-sm-12">
                                        <div class="form-box">
                                            <div class="hr show"></div>
                                        </div>
                                    </div>
                                    <div class="col col-sm-4 col-xs-6 txt-center">
                                        <div class="form-box">
                                            <a class="account-url" href="">
                                                <span class="ico ico-32 ico-sm"><i class="fa fa-history"></i></span><br>
                                                <span class="account-txt">History</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col col-sm-4 col-xs-6 txt-center">
                                        <div class="form-box">
                                            <a class="account-url" href="#">
                                                <span class="ico ico-32 ico-sm"><i class="fa fa-shoppingcart"></i></span><br>
                                                <span class="account-txt">Shopping Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col col-sm-4 col-xs-6 txt-center">
                                        <div class="form-box">
                                            <a class="account-url" href="{{URL::to('register.html')}}">
                                                <span class="ico ico-32 ico-sm"><i class="fa fa-register"></i></span><br>
                                                <span class="account-txt">Register</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col col-sm-4 col-xs-6 txt-center">
                                        <div class="form-box">
                                            <a class="account-url" href="#">
                                                <span class="ico ico-32 ico-sm"><i class="fa fa-account"></i></span><br>
                                                <span class="account-txt">Account</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col col-sm-4 col-xs-6 txt-center">
                                        <div class="form-box">
                                            <a class="account-url" href="">
                                                <span class="ico ico-32 ico-sm"><i class="fa fa-login"></i></span><br>
                                                <span class="account-txt">Login</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup popup-mysearch popup-hidden" id="popup-mysearch">
        <div class="popup-screen">
            <div class="popup-position">
                <div class="popup-container popup-small">
                    <div class="popup-html">
                        <div class="popup-header">
                            <span><i class="fa fa-search"></i>Search</span>
                            <a class="popup-close" data-target="popup-close" data-popup-close="#popup-mysearch">&times;</a>
                        </div>
                        <div class="popup-content">
                            <div class="form-content">
                                <div class="row space">
                                    <div class="col">
                                        <div class="form-box">
                                            <input type="text" name="search" value="" placeholder="Search" id="input-search" class="field" />
                                            <i class="fa fa-search sbmsearch"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-box">
                                            <button type="button" id="button-search" class="btn button-search">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

