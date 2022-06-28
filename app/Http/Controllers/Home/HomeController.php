<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use App\Models\Product;
class HomeController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        $products = Product::orderBy('id', 'desc')->limit(12)->get();
        return view('home.index', compact('agent', 'products'));
    }
}
