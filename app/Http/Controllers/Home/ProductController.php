<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ImageService;
use App\Services\ProductService;

class ProductController extends Controller
{
    private $productService;
    private $imageService;

    public function __construct(ProductService $productService, ImageService $imageService)
    {
        $this->productService = $productService;
        $this->imageService = $imageService;
    }

    public function index()
    {
        $path = 'product';
        if (request()->path() != trans($path)) {
            return redirect(trans($path));
        }

        $products = $this->productService->getProductList()->simplePaginate(12);
        return view('home.product.index', compact('products'));
    }

    public function detail($news, Product $product)
    {
        $path = 'product';
        if (request()->segment(1) != trans($path)) {
            return redirect(trans($path));
        }
        $seo = $product->seo;
        $products = $this->productService->getProductList()->limit(5)->get();
        return view('home.product.detail', compact('menuList', 'product', 'seo', 'products'));
    }
}
