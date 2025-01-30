<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('dashboard.createPost');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->seo_title = $request->input('seoTitle');
        $post->seo_description = $request->input('seoDescription');
        $post->content = $request->input('content');
        $post->save();
        return redirect()->route('posts.index');
    }

    public function index()
    {
        $posts = Post::get();
        return view('dashboard.indexPost')->with('posts', $posts);     
    }

}
