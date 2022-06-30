<section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            {{-- <h6 data-cms="{{app()->getLocale()}}-home-5">Sản Phẩm Của Chúng Tôi</h6> --}}
            <h4 data-cms="{{app()->getLocale()}}-home-6" >Sản Phẩm <em data-cms="{{app()->getLocale()}}-home-7" >Của Chúng Tôi</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
              @foreach ($products as $product)
                  <div class="item">
                      <div class="service-item">
                      <div class="icon">
                          <img src="{{$product->image}}" alt="">
                      </div>
                      <h4>{{$product->name}}</h4>
                      {!!$product->excerpt!!}
                      </div>
                </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
