<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        Post::create($data);

        return redirect()->route('admin.posts.index');
    }

    public function edit($post)
    {
        $post = Post::findOrFail($post);
        return view('admin.posts.edit', compact('post'));
    }

    public function update($post, Request $request)
    {
        $post = Post::findOrFail($post);
        $post->update($request->all());
        return redirect()->route('admin.posts.edit', $post->id);
    }

    public function destroy($post)
    {
        $post = Post::findOrFail($post);
        $post->delete();
        return redirect()->back();
    }
}