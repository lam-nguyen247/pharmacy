@extends('home.layouts.app')

@section('title', $post->name)
@section('cover', url($post->image))
@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 news-header">
                <h4 style="text-align: center; width: 100%" >  {{$post->category[0]?$post->category[0]->name:''}} </h4>
            </div>

            <div class="col-lg-8">

            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</section>

@endsection
@section('js')

@endsection
