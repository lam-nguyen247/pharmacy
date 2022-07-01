<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use App\Models\Product;
use App\Models\Post;
use App\Models\Slide;

class HomeController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        $products = Product::orderBy('id', 'desc')->limit(12)->get();
        $posts = Post::orderBy('id', 'desc')->limit(12)->get();
        $slides = Slide::orderBy('order', 'asc')->limit(5)->get();
        return view('home.index', compact('agent', 'products', 'posts', 'slides'));
    }
}
