<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use App\Models\Product;
use App\Models\Post;
use App\Models\Slide;
use App\Services\PostService;
use App\Services\ProductService;

class HomeController extends Controller
{
    private $postService;
    private $productService;

    public function __construct(PostService $postService, ProductService $productService)
    {
        $this->postService    = $postService;
        $this->productService = $productService;
    }

    public function index()
    {
        $agent = new Agent();
        $products = $this->productService->getProductList()->simplePaginate(12);
        $posts = $this->postService->getPostList()->simplePaginate(12);
        $slides = Slide::orderBy('order', 'asc')->limit(5)->get();
        return view('home.index', compact('agent', 'products', 'posts', 'slides'));
    }
}
