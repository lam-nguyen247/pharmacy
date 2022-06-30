@extends('home.layouts.app')

@section('title', 'TTB GROUP Dược phẩm quốc tế')
@section('description', '')
@section('css')


@endsection
@section('content')


<!-- ***** Main Banner Area Start ***** -->
<section class="main-banner" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="header-text">
          {{-- <h6 data-cms="{{app()->getLocale()}}-home-1">Công ty</h6> --}}
          <h2 data-cms="{{app()->getLocale()}}-home-2">Dược phẩm quốc tế <em data-cms="{{app()->getLocale()}}-home-3" style="font-weight: bold;">TTB GROUP</em></h2>
          <div class="main-button-gradient">
            <div class="scroll-to-section"><a href="#contact-section">@lang('Contact')</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="right-image">
          <img @src="/images/ttb_group2.jpg" data-cms="{{app()->getLocale()}}-home-5" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->

Gia công mỹ phẩm trọn gói hiện nay đang là một trong những dịch vụ rất được ưa chuộng trên thị trường. Đây được xem là một giải pháp toàn diện giúp các doanh nghiệp giảm thiểu rất nhiều chi phí, thời gian và công sức -  mang nhiều ưu điểm nổi bật:
✅ Có sẵn đội ngũ nghiên cứu công thức
✅ Mẫu mã sản phẩm đa dạng, linh hoạt
✅ Thủ tục pháp lý nhanh gọn
✅ Tiết kiệm thời gian chi phí và dễ dàng kiểm soát
✅ Giảm tối đa chi phí sản xuất
👉 Mong muốn đưa đến cho các doanh nghiệp mỹ phẩm Việt Nam những dòng sản phẩm chất lượng - uy tín, TTB tự tin là đơn vị gia công mỹ phẩm đáng để cho các đơn vị gửi gắm niềm tin sản phẩm của họ.
Hãy liên hệ với chúng tôi để được tư vấn kỹ hơn về sản phẩm!
----------------------------------------
TTB - NHÀ MÁY GIA CÔNG MỸ PHẨM HÀNG ĐẦU VIỆT NAM
🏤 Địa chỉ: Cụm công nghiệp Minh lãng, xã Minh Lãng, huyện Vũ Thư, tỉnh Thái Bình.
🏭 Trụ sở : Cụm công nghiệp Minh lãng, xã Minh Lãng, huyện Vũ Thư, tỉnh Thái Bình.
☎️ Hotline: 0989.490.820

@include('home.includes.products')

<section class="our-courses" id="courses">
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
                  <div class="active gradient-border"><span data-cms="{{app()->getLocale()}}-home-12" >Nhân sự</span></div>
                  <div class="gradient-border"><span data-cms="{{app()->getLocale()}}-home-13" >Mẫu mã</span></div>
                  <div class="gradient-border"><span data-cms="{{app()->getLocale()}}-home-14" >Thủ tục</span></div>
                  <div class="gradient-border"><span data-cms="{{app()->getLocale()}}-home-15">Thời gian</span></div>
                  <div class="gradient-border"><span data-cms="{{app()->getLocale()}}-home-15a">Chi phí</span></div>
                </div>
              </div>
              <div class="col-lg-9">
                <ul class="nacc">
                  <li class="active">
                    <div>
                      <div class="left-image">
                        <img @src="/images/courses-01.jpg" data-cms="{{app()->getLocale()}}-home-16" alt="">
                        {{-- <div class="price"><h6>$128</h6></div> --}}
                      </div>
                      <div class="right-content">
                        <h4 data-cms="{{app()->getLocale()}}-home-17">Có sẵn đội ngũ nghiên cứu công thức </h4>
                        <p data-cms="{{app()->getLocale()}}-home-18">Mô tả.</p>
                        {{-- <span>36 Hours</span>
                        <span>4 Weeks</span>
                        <span class="last-span">3 Certificates</span> --}}
                        <div class="text-button">
                          <a href="#" data-cms="{{app()->getLocale()}}-home-19">link</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div>
                      <div class="left-image">
                        <img @src="/images/courses-02.jpg" alt="" data-cms="{{app()->getLocale()}}-home-20">
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
                        <img @src="/images/courses-03.jpg" alt="" data-cms="{{app()->getLocale()}}-home-24">
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
                        <img @src="/images/courses-04.jpg" alt="" data-cms="{{app()->getLocale()}}-home-28">
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
                            <img @src="/images/courses-04.jpg" alt="" data-cms="{{app()->getLocale()}}-home-28">
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

<section class="simple-cta">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 offset-lg-1">
        <div class="left-image">
          <img @src="/images/cta-left-image.png" data-cms="{{app()->getLocale()}}-home-32a" alt="">
        </div>
      </div>
      <div class="col-lg-5 align-self-center">
        <h6 data-cms="{{app()->getLocale()}}-home-32">Trên "công trường" rộn tiếng ca!         </h6>
        <h4 data-cms="{{app()->getLocale()}}-home-33">TTB GROUP tự hào là đơn vị sản xuất, gia công Dược mỹ phẩm quy mô lớn nhất! </h4>
        <p data-cms="{{app()->getLocale()}}-home-34">Hân hạnh được chào đón Quý đối tác có nhu cầu gia công thương hiệu riêng với những dòng sản phẩm Dược mỹ phẩm chất lượng tốt nhất!</p>
        <div class="white-button scroll-to-section">
          <a href="#contact-section">@lang('Contact')</a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.includes.news')

@endsection


@section('js')
<script>
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
