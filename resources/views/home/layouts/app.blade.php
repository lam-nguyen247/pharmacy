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
    <link href="/css/home/reset.css" rel="stylesheet">
    <link href="/css/home/bootstrap.min.css" rel="stylesheet">
    <link href="/css/home/app.min.css" rel="stylesheet">
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
    @yield('css')
</head>

<body id="body-site">
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo" >
                        <img src="/images/Logo_Ttb.png" alt="TTB Group"> TTB GROUP
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/">@lang('Home')</a></li>
                        <li class="scroll-to-section"><a href="/@lang('products')">@lang('Products')</a></li>
                        <li class="scroll-to-section"><a href="/@lang('news')">@lang('News')</a></li>
                        <li class="scroll-to-section"><a href="/@lang('activates')">@lang('Activate')</a></li>
                        <li class="scroll-to-section"><a href="/@lang('contact')">@lang('Contact')</a></li>
                        <li class="scroll-to-section"><a href="/@lang('recruits')">@lang('Recruit')</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)" style="margin-right:5px">
                                <img class="img-fluid" loading="lazy" @src="/images/home/flag_{{app()->getLocale()}}.png" alt="image">
                                <em>{{app()->getLocale() == 'en' ? __('English') : __('Vietnamese')}}</em>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a href="/en" title="Tiếng Anh">
                                        <img class="img-fluid" loading="lazy" src="/images/home/flag_en.png" alt="Tiếng Anh">
                                        <span>Tiếng Anh</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/vi" title="Tiếng Việt">
                                        <img class="img-fluid" loading="lazy" src="/images/home/flag_vi.png" alt="Tiếng Việt">
                                        <span>Tiếng Việt</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
@yield('content')
<a id="scrolltop" class="scroll-top active" onclick="document.documentElement.scrollIntoView({ behavior: 'smooth' });">
    <i class="fa fa-chevron-up"></i>
</a>
<section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <div id="map">

              <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3724.9248657636927!2d105.80658711533175!3d20.995648694282742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zxJAuIE5ndXnhu4VuIFRyw6NpLCBUaGFuaCBYdcOibiBUcnVuZywgxJDhu5FuZyDEkGEsIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1656427696394!5m2!1svi!2s" width="100%" height="420px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <div class="row">
                <div class="col-lg-5 offset-lg-1">
                  <div class="contact-info">
                    <div class="icon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <h4>Phone</h4>
                    <span>098 949 08 20</span>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="contact-info">
                    <div class="icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <h4>Email</h4>
                    <span> duocphamttbgroup@gmail.com</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 ml-2">
            <form id="contact" class="form js-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading">
                    <h6>@lang('Contact')</h6>
                    <h4 data-cms="{{app()->getLocale()}}-home-37">TTB <em data-cms="{{app()->getLocale()}}-home-38">GROUP</em></h4>
                    <p data-cms="{{app()->getLocale()}}-home-39">Chắc chắn Khách hàng sẽ vô cùng hài lòng. Lựa chọn Tuyệt vời nhất cho DN của bạn là Lựa chọ ln TTB Group.</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="@lang('Full Name')" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="@lang('Your Email')" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="content" id="message" placeholder="@lang('Your Message')"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="main-gradient-button">@lang('Send')</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 TTP GROUP Co., Ltd. All Rights Reserved.
        </div>
      </div>
    </div>
</section>

<script src="/js/home/jquery-3.6.0.min.js"></script>
<script src="/js/home/util.min.js"></script>
<script src="/js/home/bootstrap.min.js"></script>
<script src="/js/home/isotope.min.js"></script>
<script src="/js/home/owl-carousel.js"></script>
<script async defer crossorigin="anonymous" type="text/javascript" src="/js/home/app.min.js"></script>
<script>
    function toggleDropdown() {
    document.getElementById("language-content").classList.toggle("show");
}

</script>
@yield('js')
</body>
</html>
