@extends('home.layouts.app')

@section('title', __('Contact'))

@section('content')
<section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h4 data-cms="{{app()->getLocale()}}-contact-1">TTB GROUP</h4>
            <h1>@lang('Contact')</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h6 data-cms="{{app()->getLocale()}}-contact-2">Thông tin</h6>
            <h4 data-cms="{{app()->getLocale()}}-contact-3">TTB GROUP<em data-cms="{{app()->getLocale()}}-contact-4">Vì tin mà đến</em></h4>
          </div>
          <p data-cms="{{app()->getLocale()}}-contact-5">Mong muốn đưa đến cho các doanh nghiệp mỹ phẩm Việt Nam những dòng sản phẩm chất lượng - uy tín, TTB tự tin là đơn vị gia công mỹ phẩm đáng để cho các đơn vị gửi gắm niềm tin sản phẩm của họ.
            Hãy liên hệ với chúng tôi để được tư vấn kỹ hơn về sản phẩm! <br/>
            ---------------------------------------- <br/>
            TTB - NHÀ MÁY GIA CÔNG MỸ PHẨM HÀNG ĐẦU VIỆT NAM <br/>
            Địa chỉ: Cụm công nghiệp Minh lãng, xã Minh Lãng, huyện Vũ Thư, tỉnh Thái Bình. <br/>
            Trụ sở : Cụm công nghiệp Minh lãng, xã Minh Lãng, huyện Vũ Thư, tỉnh Thái Bình. <br/>
            Hotline: 0989.490.820.</p>
        </div>
        <div class="col-lg-6 offset-lg-1 align-self-center">
          <div class="row">
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit" data-cms="{{app()->getLocale()}}-contact-6">125</div>
                <div class="count-title" data-cms="{{app()->getLocale()}}-contact-7">Finished Projects</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit" data-cms="{{app()->getLocale()}}-contact-8">11</div>
                <div class="count-title" data-cms="{{app()->getLocale()}}-contact-9">Years Experience</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit" data-cms="{{app()->getLocale()}}-contact-10">87</div>
                <div class="count-title" data-cms="{{app()->getLocale()}}-contact-11">Happy Clients</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit" data-cms="{{app()->getLocale()}}-contact-12">24</div>
                <div class="count-title" data-cms="{{app()->getLocale()}}-contact-13">Awwards Won</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

