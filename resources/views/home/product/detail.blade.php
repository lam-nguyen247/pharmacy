@extends('home.layouts.app')

@section('title', $product->name)
@section('cover', url($product->image))
@section('content')
<section class="section contact-us product-content section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-7" style="margin-right: 20px; padding: 0px;">
                <div class="container-fluid" style="padding: 0px;">
                    <div class="row" style="padding:0px">
                        <div class="col-md-12"><img src="{{$product->image}}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container" id="product-detail">
                    <form id="contact" class="form js-form" action="" method="post">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="section-heading">
                              <h6>{{$product->category[0]->name}}</h6>
                              <h4> <em >{{$product->name}}</em></h4>
                              <i>Liên hệ để biết chi tiết giá</i>
                              <p data-cms="{{app()->getLocale()}}-product-39">Chắc chắn Khách hàng sẽ vô cùng hài lòng. Lựa chọn Tuyệt vời nhất cho Doanh Nghiệp của bạn là Lựa chọn TTB Group.</p>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                                <input type="hidden" name="content" id="content" value="Liên hệ mua sản phẩm {{$product->name}}">
                              <input type="name" name="name" id="name" placeholder="@lang('Full Name')" autocomplete="on" required>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                              <fieldset>
                                <input type="text" name="phone" id="phone" placeholder="@lang('Your Phone')" required="">
                              </fieldset>
                            </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <input type="number" name="company" id="company" placeholder="@lang('Quantity')" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-gradient-button">@lang('Buy')</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center" >
            <div class="col-lg-7  right-content">
                <div class="content">
                    {!!$product->content!!}
                </div>
            </div>
            <div class="col-lg-4 left-category">
                <h4>@lang('Related Products')</h4>
                @foreach ($products as $item)
                @if ($item->id != $product->id && $item->image)
                    <div class="row">
                        <div class="col-4">
                        <a href="{{$item->href}}"> <img src="{{$item->image}}"/> </a>
                        </div>
                        <div class="col-6">
                            <a href="{{$item->href}}"> <h6 class="mb-0">{{$item->name}}</h6> </a>
                            <p>{{$item->excerpt}}</p>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>

        </div>
    </div>
</section>
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
@endsection
