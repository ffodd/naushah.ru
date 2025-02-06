<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;

class PostController extends Controller
{
    //Отобразить форму создания статьи (админка)
    public function createBack()
    {
        return view('dashboard.createPost');
    }
    //Создать статью (админка)
    public function storeBack(Request $request)
    {
        $post = new Post();
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->seo_title = $request->input('seoTitle');
        $post->seo_description = $request->input('seoDescription');
        $post->content = $request->input('content');
        $post->save();

        $postImage = new PostImage();
        $postImage->link = "webp/posts/imgPost".($post->id).".webp";
        $post->postImages()->save($postImage);

        return redirect()->route('postsBack.index');
    }
    //Отобразить все статьи (админка)
    public function indexBack()
    {
        $posts = Post::get();
        return view('dashboard.indexPost')->with('posts', $posts);     
    }
    //Отобразить форму редактирования статьи (админка)
     public function editBack(string $id)
    {
        $post = Post::find($id);
        return view('dashboard.editPost')->with('post', $post);   
    }
    //Обновить статью (админка)
    public function updateBack(Request $request)
    {
        $post = Post::find($request->input('id'));
        $post->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'seo_title' => $request->input('seoTitle'),
            'seo_description' => $request->input('seoDescription'),
            'content' => $request->input('content')
        ]);
        return redirect()->route('postsBack.index');
    }
    //Отобразить все статьи
    public function indexFront()
    {
        $posts = Post::with('postImages')->orderBy('created_at', 'desc')->get();
        return view('posts')->with('posts', $posts);     
    }
    //Отобразить одну статью
    public function showFront(string $id)
    {
        $post = Post::with('postImages')->find($id);
        return view('post')->with('post', $post);    
    }
}
