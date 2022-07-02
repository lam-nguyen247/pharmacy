<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\ImageService;
use App\Services\PostService;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $path = 'news';
        if (request()->path() != trans($path)) {
            return redirect(trans($path));
        }

        $posts = $this->postService->getPostList()->simplePaginate(12);
        return view('home.post.index', compact('posts'));
    }

    public function detail($news, Post $post)
    {
        $path = 'news';
        if (request()->segment(1) != trans($path)) {
            return redirect(trans($path));
        }
        $seo = $post->seo;
        $posts = $this->postService->getPostList()->limit(5)->get();
        return view('home.post.detail', compact('post', 'seo', 'posts'));
    }

    public function activate(){
        $path = 'activates';
        if (request()->path() != trans($path)) {
            return redirect(trans($path));
        }

        $posts = $this->postService->getPostList()->simplePaginate(12);
        return view('home.post.activate', compact('posts'));
    }

    public function recruit(){
        $path = 'recruits';
        if (request()->path() != trans($path)) {
            return redirect(trans($path));
        }

        $posts = $this->postService->getPostList()->simplePaginate(12);
        return view('home.post.recruit', compact('posts'));
    }
}
