<section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4>@lang('News')</h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            @foreach ($posts as $post)
            <div class="item">
              <div>
                <a href="{{$post->href}}">
                  <img src="{{$post->image}}"/>
                </a>
              </div>
              <p>“{{$post->excerpt}}”</p>
                <a  style="color: #111" href="{{$post->href}}">
                    <h4 style="color: #111" >{{$post->name}}</h4>
                </a>
                <span>{{isset($post->category[0])?$post->category[0]->name:''}}</span>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
</section>
