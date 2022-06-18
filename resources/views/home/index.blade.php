@extends('home.layouts.app')

@section('title', 'ttbgroup.vn Đơn Vị Mua Bán Chuyển Nhượng Group Facebook Uy Tín')
@section('description', 'Bạn đang có nhu cầu mua bán Group Facebook chất lượng? ttbgroup.vn - đơn vị mua bán chuyển nhượng Group Facebook uy tín tại Việt Nam sẽ giúp bạn làm điều đó.')
@section('css')


@endsection
@section('content')
    {{-- Block hero --}}
    <div class="grid-hero" id="grid-hero">
        <div id="grid-hero-banner">
        </div>
    </div>

    {{-- Block call --}}
    <div class="grid-call">
        <div class="container">
            <div class="box-service-home branding">
                <div class="box-content row">
                    <div class="col-12 col-md-12 " style="text-align: center; padding-bottom:20px;">
                       @if ($config->youtube != null)
                        <div class="video-container">
                            <iframe width="100%"  src="{{$config->youtube}}?autoplay=1&mute=0" title="YouTube video player" frameborder="0"
                            allowfullscreen allow='autoplay'></iframe>
                        </div>
                        @else
                        <div class="video-container">
                           <img style="width:100%" src="/images/banner.jpg"/>
                        </div>
                       @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Block service --}}
    <div class="grid-service servicee">
        <div class="container">
            <div class="box-call">
                <h3 class="title" data-cms="{{app()->getLocale()}}-index-24">Tại sao nên sở hữu một Group Facebook</h3>
                <div class="sapo" style="max-width:740px">
                    <p style="text-align: left" data-cms="{{app()->getLocale()}}-index-26">
                        ► Group Facebook giúp nâng tầm thương hiệu Sản Phẩm, Doanh Nghiệp của bạn.
                        ► Đưa Sản Phẩm của bạn đến với khách hàng một cách tự nhiên mà không tốn phí.
                        ► Group Facebook đem lại doanh thu cho bạn từ những đối tác quảng cáo SP.
                        ► Group Facebook sức mạnh khủng khiếp đến từ cộng đồng!
                    </p>
                    <div class="btn-normal" style="margin-top: 10px;">
                        <a style="background: #4F4F4F; border-radius: 24px;" href="/@lang('channels')" title="Get to know us">
                            <span style="color: white !important" class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-30">Danh Sách Group</span>
                            <svg style="color: white !important" class="icon"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('home.includes.consultation')
@endsection

@section('js')

@endsection
