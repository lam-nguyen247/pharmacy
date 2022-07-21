@extends('home.layouts.app')

@section('title', $post->name)
@section('cover', url($post->image))
@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 news-header">
                <h4 style="text-align: center; width: 100%" >  {{$post->category[0]->name}} </h4>
            </div>
        </div>
    </div>
</section>
<section class="section news-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8  right-content">
                <div class="tittle clearfix">
                    <h1>{{$post->name}}</h1>
                    <div class="tacgia">
                    </div>
                    <style>.tacgia p{font-size: 14px !important;line-height: 1em !important;margin-bottom: .5em;}.tacgia a{color: #004C99;}section.news-detail .news-detail-content .information .tittle .time{margin-bottom: 1em;}</style>
                    <div class="time">{{$post->created_at}}</div>
                 </div>
                <div class="content">
                    {!!$post->content!!}
                </div>
            </div>
            <div class="col-lg-3 left-category">
                <h4>Bài viết khác</h4>
                @foreach ($posts as $item)
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
