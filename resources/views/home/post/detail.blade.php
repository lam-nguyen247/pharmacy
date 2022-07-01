@extends('home.layouts.app')

@section('title', $post->name)
@section('cover', url($post->image))
@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 news-header">

            </div>
        </div>
    </div>
</section>

@endsection
@section('js')

@endsection
