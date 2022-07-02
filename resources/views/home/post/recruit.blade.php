@extends('home.layouts.app')

@section('title', __('Recruits'))

@section('content')
<br/>

@include('home.includes.recruit')

@include('home.includes.simple')
  <section class="featured-product">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6 data-cms="{{app()->getLocale()}}-product-1">Dịch vụ nổi bật</h6>
            <h4 data-cms="{{app()->getLocale()}}-product-2">Tiêu chí của <em data-cms="{{app()->getLocale()}}-product-3">TTB GROUP</em></h4>
          </div>
        </div>
        <div class="col-lg-3 align-self-center">
          <div class="left-info">
            <div class="col-lg-12">
              <div class="info-item">
                <div class="icon">
                  <img src="/images/Logo_Ttb.png" alt="">
                </div>
                <h4 data-cms="{{app()->getLocale()}}-product-4">Chất lượng mỹ phẩm gia công tốt, hiệu quả cao</h4>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="info-item last-info">
                <div class="icon">
                  <img src="/images/Logo_Ttb.png" alt="">
                </div>
                <h4 data-cms="{{app()->getLocale()}}-product-6">Luôn không ngừng phát triển công thức gia công mỹ phẩm mới</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="product-image">
            <img @src="/images/ttb_group.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-3 align-self-center">
          <div class="right-info">
            <div class="col-lg-12">
              <div class="info-item">
                <div class="icon">
                  <img src="/images/Logo_Ttb.png" alt="">
                </div>
                <h4 data-cms="{{app()->getLocale()}}-product-8">Công nghệ sản xuất mỹ phẩm tiên tiến</h4>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="info-item last-info">
                <div class="icon">
                  <img src="/images/Logo_Ttb.png" alt="">
                </div>
                <h4 data-cms="{{app()->getLocale()}}-product-10">Gia công mỹ phẩm trọn gói với thiết kế bao bì bắt mắt, chi phí hợp lí</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

