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
    public function __construct(private Post $post) {}
    public function index()
    {
        $posts = $this->post->latest()->paginate(10);
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
        $this->post->create($data);


        return redirect()->route('admin.posts.index');
    }

    public function edit($post)
    {
        $post = $this->post->findOrFail($post);
        return view('admin.posts.edit', compact('post'));
    }

    public function update($post, PostRequest $request)
    {
        $post = $this->post->findOrFail($post);

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
        $post = $this->post->findOrFail($post);
        $post->delete();
        return redirect()->back();
    }
}
