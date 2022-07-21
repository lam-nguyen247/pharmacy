@extends('home.layouts.app')

@section('title', 'TTB GROUP Dược phẩm quốc tế')
@section('description', '')
@section('css')


@endsection
@section('content')


<!-- ***** Main Banner Area Start ***** -->
<section class="main-banner" id="top">
  <div class="container-fluid">
    <div class="row">
        <div class="owl-carousel slides" style="padding: 0px !important">
            @foreach ($slides as $slide)
                <div class="item" style="width: 100%">
                    <img src="{{$slide->image}}" alt="">
              </div>
            @endforeach
        </div>
    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<section style="margin-top: 0px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h4 >TTB <em>GROUP</em></h4>
        </div>
      </div>
      <div class="col-lg-12">
        <iframe width="100%" style="height: 75vh" src="https://www.youtube.com/embed/SXGDPyqGPRo?autoplay=0&showinfo=0&controls=0&modestbranding=0" title="YouTube video player" frameborder="0" allow="autoplay" allowfullscreen></iframe>
      </div>

    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->

@include('home.includes.products')

<section class="our-courses section" id="courses">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h6 data-cms="{{app()->getLocale()}}-home-8">Dịch vụ</h6>
          <h4 data-cms="{{app()->getLocale()}}-home-9">Đơn vị gia công <em data-cms="{{app()->getLocale()}}-home-10">Sản Phẩm</em></h4>
          <h4  data-cms="{{app()->getLocale()}}-home-11">5 LÝ DO BẠN NÊN CHỌN GIA CÔNG MỸ PHẨM TRỌN GÓI </h4>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="naccs">
          <div class="tabs">
            <div class="row">
              <div class="col-lg-3">
                <div class="menu">
                    <div class="active gradient-border"><span data-cms="{{app()->getLocale()}}-home-12" >Có sẵn đội ngũ nghiên cứu công thức</span></div>
                    <div class="gradient-border"><span data-cms="{{app()->getLocale()}}-home-13" >Mẫu mã sản phẩm đa dạng, linh hoạt</span></div>
                    <div class="gradient-border"><span data-cms="{{app()->getLocale()}}-home-14" >Thủ tục pháp lý nhanh gọn</span></div>
                    <div class="gradient-border"><span data-cms="{{app()->getLocale()}}-home-15b">Tiết kiệm thời gian chi phí và dễ dàng kiểm soát</span></div>
                    <div class="gradient-border"><span data-cms="{{app()->getLocale()}}-home-155">Giảm tối đa chi phí sản xuất</span></div>
                </div>
              </div>
              <div class="col-lg-9">
                <ul class="nacc">
                  <li class="active">
                    <div>
                      <div class="left-image">
                        <img @src="/images/ttb_group8.jpg" data-cms="{{app()->getLocale()}}-home-16" alt="">
                        {{-- <div class="price"><h6>$128</h6></div> --}}
                      </div>
                      <div class="right-content">

                      </div>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div class="left-image">
                        <img @src="/images/ttb_group7.jpg" alt="" data-cms="{{app()->getLocale()}}-home-20">
                        {{-- <div class="price"><h6>$156</h6></div> --}}
                      </div>
                      <div class="right-content">
                        <h4 data-cms="{{app()->getLocale()}}-home-21">Mẫu mã sản phẩm đa dạng, linh hoạt </h4>
                        <p data-cms="{{app()->getLocale()}}-home-22">Mô tả.</p>
                        {{-- <span>36 Hours</span>
                        <span>4 Weeks</span>
                        <span class="last-span">3 Certificates</span> --}}
                        <div class="text-button">
                          <a href="#" data-cms="{{app()->getLocale()}}-home-23">link</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div class="left-image">
                        <img @src="/images/ttb_group6.jpg" alt="" data-cms="{{app()->getLocale()}}-home-24">
                        {{-- <div class="price"><h6>$184</h6></div> --}}
                      </div>
                      <div class="right-content">
                        <h4 data-cms="{{app()->getLocale()}}-home-25">Thủ tục pháp lý nhanh gọn</h4>
                        <p data-cms="{{app()->getLocale()}}-home-26">Mô tả.</p>
                        {{-- <span>36 Hours</span>
                        <span>4 Weeks</span>
                        <span class="last-span">3 Certificates</span> --}}
                        <div class="text-button">
                          <a href="#" data-cms="{{app()->getLocale()}}-home-27">link</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div class="left-image">
                        <img @src="/images/ttb_group5.jpg" alt="" data-cms="{{app()->getLocale()}}-home-28">
                        {{-- <div class="price"><h6>$76</h6></div> --}}
                      </div>
                      <div class="right-content">
                        <h4 data-cms="{{app()->getLocale()}}-home-29">Tiết kiệm thời gian chi phí và dễ dàng kiểm soát</h4>
                        <p data-cms="{{app()->getLocale()}}-home-30">Mô tả.</p>
                        {{-- <span>36 Hours</span>
                        <span>4 Weeks</span>
                        <span class="last-span">3 Certificates</span> --}}
                        <div class="text-button">
                          <a href="#" data-cms="{{app()->getLocale()}}-home-31">link</a>
                        </div>
                      </div>
                    </div>
                    </li>
                    <li>
                        <div>
                          <div class="left-image">
                            <img @src="/images/ttb_group4.jpg" alt="" data-cms="{{app()->getLocale()}}-home-28">
                            {{-- <div class="price"><h6>$76</h6></div> --}}
                          </div>
                          <div class="right-content">
                            <h4 data-cms="{{app()->getLocale()}}-home-29">Giảm tối đa chi phí sản xuất</h4>
                            <p data-cms="{{app()->getLocale()}}-home-30">Mô tả.</p>
                            {{-- <span>36 Hours</span>
                            <span>4 Weeks</span>
                            <span class="last-span">3 Certificates</span> --}}
                            <div class="text-button">
                              <a href="#" data-cms="{{app()->getLocale()}}-home-31">link</a>
                            </div>
                          </div>
                        </div>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="simple-cta section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 offset-lg-1">
        <div class="left-image">
          <img @src="/images/ttb_group2.jpg" data-cms="{{app()->getLocale()}}-home-32a" alt="">
        </div>
      </div>
      <div class="col-lg-5 align-self-center">
        <h6 data-cms="{{app()->getLocale()}}-home-32">Trên "công trường" rộn tiếng ca!         </h6>
        <h4 data-cms="{{app()->getLocale()}}-home-33">TTB GROUP tự hào là đơn vị sản xuất, gia công Dược mỹ phẩm quy mô lớn nhất! </h4>
        <p data-cms="{{app()->getLocale()}}-home-34">Hân hạnh được chào đón Quý đối tác có nhu cầu gia công thương hiệu riêng với những dòng sản phẩm Dược mỹ phẩm chất lượng tốt nhất!</p>
        <div class="white-button scroll-to-section">
          <a href="/@lang('contact')">@lang('Contact')</a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.includes.news')

@endsection


@section('js')

<script>

$(document).ready(function() {
 $(".slides").owlCarousel({
     //Basic Speeds
    slideSpeed : 800,
    paginationSpeed : 800,
    loop: true,

    //Autoplay
    autoPlay : true,
    goToFirst : true,
    goToFirstSpeed : 1000,

    // Navigation
    navigation : false,
    navigationText : ["prev","next"],
    pagination : true,
    paginationNumbers: true,

    // Responsive
    items : 1,
 });
 setInterval(() => {
    $(".owl-next").click();
 }, 2500);
});
    let Language = (function() {
        return {
            send: `@lang('Send')`,
            sending: `@lang('Sending')`,
            sentSuccessfully: `@lang('Sent successfully')`,
            sentFailed: `@lang('Sent failed')`,
        };
    })();
</script>
<script src="/js/home/cms.min.js"></script>
@endsection
