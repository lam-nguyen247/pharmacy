<!DOCTYPE html>
<html lang="{{session('locale', $config->locale)}}" data-theme="{{session('theme', $config->theme)}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="XrscSqm4bh48Nw0IZhyH-JO52qXBf45BcSy5xigkL2Y" />
    <meta property="og:image" content="@yield('cover', '/images/home/logo-white.png')"/>
    <meta property="og:image:alt" content="@yield('cover', '/images/home/logo-white.png')"/>
    <meta name="twitter:image" content="@yield('cover', '/images/home/logo-white.png')"/>
    <meta property="og:url" content=" {{  Request::url() }} "/>
    <meta property="og:type" content=" {{  Request::url() }} "/>
    @isset($seo)
        <title>{{$seo->title}}</title>
        <meta name="description" content="{{$seo->description}}">
        <meta property="og:title" content="{{$seo->description}}">
        <meta property="og:description" content="{{$seo->description}}">
        <meta name="robots" content="{{$seo->robots}}" />
    @else
        <title>@yield('title') </title>
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta name="description" content="@yield('description') ">
    @endif
    @cms
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/admin/favicon.png">
    <link rel="canonical" href="{{request()->url()}}">
    <!-- Custom CSS -->
    <link href="/css/home/app.min.css" rel="stylesheet">
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
    @yield('css')
</head>
<body id="body-site">
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

    {{-- icon --}}
    <label id="navigation__button" for="navi-toggle" class="navigation__button">
        <span class="navigation__icon"></span>
    </label>
    <div id="navigation__background" class="navigation__background">
    </div>
    <div id="navigation__title" class="navigation__title menu" >
        <nav class="site-nav">
            <ul class="my-menu">
                <li class="my-item"><a href="/@lang('about-us')" class="navigation__link">@lang('About Us')</a></li>
                <li class="my-item">
                    <a href="#">Dịch vụ Facebook</a>
                    <ul class="sub-menu">
                        <li class="sub-item">
                           <a href="/mua-group-facebook">Bán Group Facebook</a>
                        </li>
                        {{-- <li class="sub-item"> <a href="/tin-tuc/tang-thanh-vien-cho-group"> Tăng thành viên cho Group </a></li> --}}
                        <li class="sub-item"> <a href="/mua-fanpage-facebook"> Bán Fanpage Facebook </a></li>
                        {{-- <li class="sub-item"> <a href="/tin-tuc/tang-like-cho-fanpage"> Tăng Like cho Fanpage </a></li> --}}
                        {{-- <li class="sub-item"> <a href="/tin-tuc/thu-mua-lai-group-facebook"> Thu mua lại Group facebook </a></li>
                        <li class="sub-item"> <a href="/tin-tuc/thu-mua-lai-fanpage"> Thu mua lại FanPage </a></li> --}}
                    </ul>
                </li class="my-item">
                <li class="my-item">
                    <a href="#">Dịch vụ Tiktok</a>
                    <ul class="sub-menu">
                        <li class="sub-item">
                           <a href="/mua-kenh-tiktok">Bán tài khoản Tiktok</a>
                        </li>
                        {{-- <li class="sub-item">
                            <a href="/chuyen-nhuong-lai-kenh-tiktok">Thu mua tài khoản Tiktok</a>
                         </li> --}}
                        {{-- <li class="sub-item"> <a href="/tin-tuc/tang-follow-tiktok"> Tăng Follow Tiktok</a></li>
                        <li class="sub-item"> <a href="/tin-tuc/tang-like-tiktok"> Tăng Like Tiktok </a></li>
                        <li class="sub-item"> <a href="/tin-tuc/tang-view-tiktok"> Tăng View Tiktok </a></li> --}}
                    </ul>
                </li>
                <li class="my-item"> <a href="/@lang('news')" class="navigation__link" >@lang('News')</a> </li>
                <li class="my-item"> <a href="/@lang('contact')" class="navigation__link">@lang('Contact')</a></li>
                <li class="my-item"><a href="#"> <a href="/thong-tin-thanh-toan" class="navigation__link">Thông tin thanh toán</a></a></li>

            </ul>
          </nav>
    </div>
    <h3 id="navigation__title" class="navigation__title" style="color:white !important" data-cms="{{app()->getLocale()}}-layouts-app-23">LIÊN HỆ HOTLINE:  0988.50.8769 </h3>

    {{-- language --}}
    <div class="navigation__language language-picker js-language-picker" data-trigger-class="btn btn--subtle js-tab-focus">
        <button class="language-picker__button" onclick="toggleDropdown()">
            <img class="img-fluid" @src="/images/home/flag_{{app()->getLocale()}}.png" alt="image">
            <em>{{app()->getLocale() == 'en' ? __('English') : __('Vietnamese')}}</em>
            <svg viewBox="0 0 16 16" class="icon"><polygon points="3,5 8,11 13,5 "></polygon></svg>
        </button>
        <div id="language-content" class="dropdown-content">
            <ul class="language-picker__list">
                <li>
                    <a href="/en" title="@lang('English')">
                        <img class="img-fluid" @src="/images/home/flag_en.png" alt="@lang('English')">
                        <span>@lang('English')</span>
                    </a>
                </li>
                <li>
                    <a href="/vi" title="@lang('Vietnamese')">
                        <img class="img-fluid" @src="/images/home/flag_vi.png" alt="@lang('Vietnamese')">
                        <span>@lang('Vietnamese')</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Dark/Light mode --}}
    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" {{session('theme') == 'dark' ? 'checked' : '' }}>
            <div class="slider round">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="0.502638in" height="0.501575in" version="1.1" viewbox="0 0 502.64 501.57">
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path class="fil0" d="M500.62 322.06c-38.53,9.01 -72.33,40.44 -155.22,25.45 -51.69,-9.35 -97.71,-37.16 -124.62,-64.83 -63.29,-65.09 -86.84,-158.41 -52.58,-248.15 3.59,-9.4 11.11,-21.61 13.05,-31.98 -85.44,28.76 -144,83.86 -171.61,170.21 -33.74,105.52 11.37,203.76 63.6,257.39 128.48,131.92 374.62,82.21 427.37,-108.09z"></path>
                    </g>
                </svg>
            </div>
        </label>
    </div>

    <nav class="navigation__nav">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="navigation__flex">
                        <div class="navigation__content">
                            <h4 class="navigation__lable" data-cms="{{app()->getLocale()}}-layouts-app-47">Menu</h4>
                            <ul class="navigation__list" id="navi-menu">
                                <li class="navigation__item active">
                                    <a href="/@lang('about-us')" class="navigation__link">►@lang('About Us')</a>
                                </li>
                                <li class="navigation__item">
                                    <p  class="navigation__link" >►Dịch vụ Facebook</p>
                                    <ul class="sub-menu">
                                        <li class="sub-item">
                                           <a href="/mua-group-facebook">Bán Group Facebook</a>
                                        </li>
                                        {{-- <li class="sub-item"> <a href="/tin-tuc/tang-thanh-vien-cho-group"> Tăng thành viên cho Group </a></li> --}}
                                        <li class="sub-item"> <a href="/mua-fanpage-facebook"> Bán Fanpage Facebook </a></li>
                                        {{-- <li class="sub-item"> <a href="/tin-tuc/tang-like-cho-fanpage"> Tăng Like cho Fanpage </a></li> --}}
                                        {{-- <li class="sub-item"> <a href="/tin-tuc/thu-mua-lai-group-facebook"> Thu mua lại Group facebook </a></li>
                                        <li class="sub-item"> <a href="/tin-tuc/thu-mua-lai-fanpage"> Thu mua lại FanPage </a></li> --}}
                                    </ul>
                                </li>
                                <li class="navigation__item">
                                    <a href="/mua-kenh-tiktok" class="navigation__link" >►Dịch vụ Tiktok</a>
                                    <ul class="sub-menu">
                                        <li class="sub-item">
                                           <a href="/mua-kenh-tiktok">Bán tài khoản Tiktok</a>
                                        </li>
                                        {{-- <li class="sub-item">
                                            <a href="/chuyen-nhuong-lai-kenh-tiktok">Thu mua tài khoản Tiktok</a>
                                         </li> --}}
                                        {{-- <li class="sub-item"> <a href="/tin-tuc/tang-follow-tiktok"> Tăng Follow Tiktok</a></li>
                                        <li class="sub-item"> <a href="/tin-tuc/tang-like-tiktok"> Tăng Like Tiktok </a></li>
                                        <li class="sub-item"> <a href="/tin-tuc/tang-view-tiktok"> Tăng View Tiktok </a></li> --}}
                                    </ul>
                                </li>
                                <li class="navigation__item">
                                    <a href="/@lang('news')" class="navigation__link" >►@lang('News')</a>
                                </li>
                                <li class="navigation__item">
                                    <a href="/@lang('contact')" class="navigation__link">►@lang('Contact')</a>
                                </li>
                                <li class="navigation__item">
                                    <a href="/thong-tin-thanh-toan" class="navigation__link">►Thông tin thanh toán</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="navigation__flex">
                        <div class="navigation__content">
                            <div class="navigation__image">
                                <img id="menu-image" class="img-fluid" @src="/images/home/menu-about.png" alt="Images" data-cms="{{app()->getLocale()}}-layouts-app-65">
                            </div>
                            <div class="navigation__info">
                                <ul class="navigation-list">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{$config->phone}}" title="Số điện thoại" data-cms="{{app()->getLocale()}}-layouts-app-70">0988.50.8769</a></li>
                                    <li><span data-cms="{{app()->getLocale()}}-layouts-app-73">Email:</span> <a href="mailto:{{$config->email}}" title="Email" data-cms="{{app()->getLocale()}}-layouts-app-74">adgroup.vnn@gmail.com</a></li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> <span data-cms="{{app()->getLocale()}}-layouts-app-77">Zalo: 0988508769</span></li>
                                </ul>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<header id="header" class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="header__logo-box d-flex align-items-center">
                    <a href="/" title="logo">
                        <img style="padding:10px" class="img-fluid" @src="/images/home/logo-white.png" alt="{{config('app.name')}}">
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="header__nav"></div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                {{-- <div class="col-12 col-md-4 col-lg-5">
                    <div class="footer-content">
                        <h1 style="font-size: 2rem" class="title" data-cms="{{app()->getLocale()}}-layouts-app-93">Thông tin công ty</h1>
                        <ul class="footer-list">

                        </ul>
                    </div>
                </div> --}}
                <div class="col-12 col-md-4 col-lg-5">
                    <div class="footer-content">
                        <h1 style="font-size: 2rem"  class="title">Thông tin công ty</h1>
                        <ul class="footer-list">
                            <li><span>CÔNG TY CỔ PHẦN CÔNG NGHỆ TRUYỀN THÔNG MK MEDIA</span></li>
                            <li><span>Địa chỉ: Số 15A Ngõ 21/13 Lĩnh Nam - Hoàng Mai - Hà Nội</span></li>
                            <li><span>Mã số thuế: 0109379379</span> </li>
                            <li><a href="tel:+840988508769" title="Số điện thoại">Hotline: {{$config->phone}}</a></li>
                            <li><span>Email:</span> <a href="mailto:{{$config->email}}" title="Email" >{{$config->email}}</a></li>
                            <li><span>Zalo:</span> <a href="https://zalo.me/{{$config->zalo}}" title="Zalo" >{{$config->zalo}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="footer-content">
                        <h3 class="title">Facebook</h3>
                        <ul class="footer-list">
                            <li class="sub-item">
                                <a href="/mua-group-facebook">Bán Group Facebook</a>
                             </li>
                             {{-- <li class="sub-item"> <a href="/tin-tuc/tang-thanh-vien-cho-group"> Tăng thành viên cho Group </a></li> --}}
                             <li class="sub-item"> <a href="/mua-fanpage-facebook"> Bán Fanpage Facebook </a></li>
                             {{-- <li class="sub-item"> <a href="/tin-tuc/tang-like-cho-fanpage"> Tăng Like cho Fanpage </a></li> --}}
                             {{-- <li class="sub-item"> <a href="/tin-tuc/thu-mua-lai-group-facebook"> Thu mua lại Group facebook </a></li>
                             <li class="sub-item"> <a href="/tin-tuc/Thu mua lại FanPage"> Thu mua lại FanPage </a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-2">
                    <div class="footer-content">
                        <h3 class="title" >Tiktok</h3>
                        <ul class="footer-list">
                            <li class="sub-item">
                                <a href="/mua-kenh-tiktok">Bán tài khoản Tiktok</a>
                             </li>
                             {{-- <li class="sub-item">
                                <a href="/chuyen-nhuong-lai-kenh-tiktok">Thu mua tài khoản Tiktok</a>
                             </li> --}}
                             {{-- <li class="sub-item"> <a href="/tin-tuc/tang-follow-tiktok"> Tăng Follow Tiktok</a></li>
                             <li class="sub-item"> <a href="/tang-like-tiktok"> Tăng Like Tiktok </a></li>
                             <li class="sub-item"> <a href="/tin-tuc/tang-view-tiktok"> Tăng View Tiktok </a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-8 col-md-3 col-lg-3">
                    <div class="footer-content">
                        <h3 class="title">@lang('Follow us')</h3>
                        <div class="fb-page" data-href="https://www.facebook.com/ttbgroup.vn" data-tabs="timeline" data-width="" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ttbgroup.vn" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ttbgroup.vn">ttbgroup.vn</a></blockquote></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>@lang('Design by') ShopGroup</p>
    </div>
</footer>
<a id="scrolltop" class="scroll-top" onclick="document.documentElement.scrollIntoView({ behavior: 'smooth' });">
    <svg class="icon icon-chevron-up"><use xlink:href="#icon-chevron-up"></use></svg>
</a>
<div class="overlay" id="modal-overlay"></div>
<div class="modal" id="modal-form">
    <button class="modal-close-btn" id="close-btn">
        <svg class="icon"><use xlink:href="#icon-close"></use></svg>
    </button>
</div>
<div class="box-contact">
    <div class="hotline-phone" style="display: none;">
        <div class="ring">
          <div class="ring-circle"></div>
          <div class="ring-circle-fill"></div>
          <div class="ring-img-circle">
            <a href="tel:+84988508769" class="btn-img">
              <img src="/images/home/phone.png" width="38">
            </a>
          </div>
        </div>
        {{-- <div class="bar">
          <a href="tel:+84899707888">
            <span class="text-hotline">{{$config->zalo}}</span>
          </a>
        </div> --}}
    </div>
    <div class="messenger">
      <div class="ring">
            <div class="">
            <a href="https://m.me/ttbgroup.vn" class="btn-img" target="_blank">
                <img src="/images/home/social-media.png" width="38">
            </a>
        </div>
      </div>
      <div class="bar">
        <a href="https://m.me/ttbgroup.vn" target="_blank">
          <span class="text-hotline">Facebook</span>
        </a>
      </div>
    </div>

    <div class="zalo">
      <div class="ring">
            <div class="">
                <a href="https://zalo.me/{{$config->zalo}}" class="btn-img" target="_blank">
                <img src="/images/home/communication.png" width="38">
          </a>
        </div>
      </div>
      <div class="bar">
        <a href="https://zalo.me/{{$config->zalo}}" target="_blank">
          <span class="text-hotline">Zalo</span>
        </a>
      </div>
    </div>
</div>

<script
  src="/js/home/jquery-3.6.0.min.js"></script>
<script async defer crossorigin="anonymous" type="text/javascript" src="/js/home/app.min.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=585723972044551&autoLogAppEvents=1" nonce="2spNzV4z"></script>
@yield('js')
</body>
</html>
