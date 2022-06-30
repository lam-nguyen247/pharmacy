<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use App\Models\Product;
use App\Models\Post;
class HomeController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        $products = Product::orderBy('id', 'desc')->limit(12)->get();
        $posts = Post::orderBy('id', 'desc')->limit(12)->get();
        return view('home.index', compact('agent', 'products', 'posts'));
    }
}
