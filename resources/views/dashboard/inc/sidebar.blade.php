<div class="app-main">
    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
        </div>
        <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading">{{trans('dashboards.title')}}</li>
                     <li>
                        <a href="#">
                           <i class="metismenu-icon fas fa-cog"></i>
                            {{trans('dashboards.setting')}}
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('register')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('dashboards.addAdmin')}}
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="#">
                            <i class="metismenu-icon fas fa-home"></i>
                            {{trans('dashboards.homePage')}}
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('dslider.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('dashboards.slider')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dabout.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('about.about')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dfeatures.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('features.feature')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dmission.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('mission.mission')}}
                                </a>
                            </li>

                            <li>
                                <a href="{{route('dgallary.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('gallary.gallary')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dpartners.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('partners.partners')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dservices.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('services.services')}}
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon far fa-id-card"></i>
                            {{trans('dashboards.contactUs')}}
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('dphone.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('phone.addPhone')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dmail.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('mail.addMail')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dmap.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('map.addmap')}}
                                </a>
                            </li>

                            <li>
                                <a href="{{route('daddress.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('address.addAddress')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dsocial.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('social.addsocial')}}
                                </a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="{{route('dwhatsAndWe.index')}}">--}}
{{--                                    <i class="metismenu-icon"></i>--}}
{{--                                    {{trans('whats.addWhats')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('dqrcode.index')}}">--}}
{{--                                    <i class="metismenu-icon"></i>--}}
{{--                                    {{trans('qrcode.addqrcode')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>

{{--                    <li>--}}
{{--                        <a href="#">--}}
{{--                            <i class="metismenu-icon fas fa-newspaper"></i>--}}
{{--                            {{trans('news.news')}}--}}
{{--                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
{{--                        </a>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('dnews.index')}}">--}}

{{--                                    {{trans('news.allnews')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a href="#">--}}
{{--                            <i class=" metismenu-icon  fas fa-ring"></i>--}}
{{--                            {{trans('brand.brand')}}--}}
{{--                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
{{--                        </a>--}}
{{--                        <ul>--}}

{{--                            <li>--}}
{{--                                <a href="{{route('dbrand.index')}}">--}}

{{--                                    {{trans('brand.allbrands')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('dbrandclass.index')}}">--}}

{{--                                    {{trans('brand_class.allbrandclass')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">--}}
{{--                            <i class="metismenu-icon fas fa-store"></i>--}}
{{--                            {{trans('products.products')}}--}}
{{--                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
{{--                        </a>--}}
{{--                        <ul>--}}

{{--                            <li>--}}
{{--                                <a href="{{route('dproducts.index')}}">--}}

{{--                                    {{trans('products.allproducts')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">--}}

{{--                            <i class=" metismenu-icon far  fa-address-card"  ></i>--}}

{{--                            {{trans('forms.forms')}}--}}
{{--                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
{{--                        </a>--}}
{{--                        <ul>--}}

{{--                            <li>--}}
{{--                                <a href="{{route('dforms.index')}}">--}}

{{--                                    {{trans('forms.individual')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('dcompanyforms.index')}}">--}}

{{--                                    {{trans('forms.company')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('dgovforms.index')}}">--}}

{{--                                    {{trans('forms.government')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}



{{--                        </ul>--}}
{{--                    </li>--}}


{{--                    <li>--}}
{{--                        <a href="#">--}}

{{--                            <i class=" metismenu-icon fas fa-percent "></i>--}}

{{--                            {{trans('sale.sale')}}--}}
{{--                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
{{--                        </a>--}}
{{--                        <ul>--}}

{{--                            <li>--}}
{{--                                <a href="{{route('dsale.index')}}">--}}

{{--                                    {{trans('sale.sale')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}



                    <!--



-->
                    <li>
                        <a href="#">
                            <i class="metismenu-icon fas fa-file-code"></i>
                            {{trans('seo.seo')}}
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>

                            <li>
                                <a href="{{route('dseo.index')}}">

                                    {{trans('seo.addseo')}}
                                </a>
                            </li>

                        </ul>
                    </li>


            </div>
        </div>
    </div>


