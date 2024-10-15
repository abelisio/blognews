<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostRequest;

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

    public function store(PostRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        $data['thumb'] = $request->thumb?->store('posts', 'public');
        Post::create($data);

        return redirect()->route('admin.posts.index');
    }

    public function edit($post)
    {
        $post = Post::findOrFail($post);
        return view('admin.posts.edit', compact('post'));
    }

    public function update($post, PostRequest $request)
    {
        $post = Post::findOrFail($post);

        $data = $request->all();

        if ($post->thumb) {
            if ($post->thumb) Storage::disk('public')->delete($post->thumb);
            $data['thumb'] = $request->thumb?->store('posts', 'public');
        }

        $post->update($data);
        return redirect()->route('admin.posts.edit', $post->id);
    }

    public function destroy($post)
    {
        $post = Post::findOrFail($post);
        $post->delete();
        return redirect()->back();
    }
}