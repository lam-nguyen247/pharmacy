@extends('home.layouts.app')

@section('title', $product->name)
@section('cover', url($product->image))
@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image_selected"><img src="{{$product->image}}" alt=""></div>
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="card">
                        <div class="card-body py-5 px-4">
                        <h6 class="card-title text-muted">XD File App</h6>
                        <h2 class="text">Get Card UI Ecommerce Module</h2>
                        <h3 class="Price pt-3"><i class="fa fa-dollar mr-1"></i>1890.50</h3>
                        <p class="card-text text-muted">Staple and skinny,grinder adffogato, dark<br>Sweet and flavourful</p>
                        <a href="#" class="btn btn-dark">Buy Now</a>
                        <footer class="footer text-muted pt-5"><p class="mytext mt-3">Offer valid starting 21 July 2020<br>Through 26 July 2020</p></footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section news-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8  right-content">
                <div class="content">
                    {!!$product->content!!}
                </div>
            </div>
            <div class="col-lg-3 left-category">
                <h4>@lang('Related Products')</h4>
                @foreach ($products as $item)
                <div class="row">
                    <div class="col-4">
                       <a href="{{$item->href}}"> <img src="{{$item->image}}"/> </a>
                    </div>
                    <div class="col-6">
                        <a href="{{$item->href}}"> <h6 class="mb-0">{{$item->name}}</h6> </a>
                    </div>
                  </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endsection
@section('js')

@endsection
