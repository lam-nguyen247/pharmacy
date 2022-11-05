@extends('admin.layouts.app')

@section('title', __('All Products'))

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-sm btn-outline-success float-right" href="{{ route('product.create') }}">
                        <i class="fas fa-plus-circle"></i> @lang('Add New')</a>
                    <h4 class="card-title mb-4">@lang('All Posts')</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered display js-datatable w-100">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                @if(Route::has('category.index'))<th>@lang('Categories')</th>@endif
                                <th>@lang('Title')</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($productList as $product)
                                @if ($product->category->first() != null)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><img @src="{{$product->image}}" width="80" /></td>
                                    @if(Route::has('category.index'))<td>{{$product->category->first()->name}}</td>@endif
                                    <td>{{$product->name}}</td>
                                    <td><x-action route="product" id="{{$product->id}}" /></td>
                                </tr>
                                @endif
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
