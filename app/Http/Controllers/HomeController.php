<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function __construct(private Post $post) {}
    public function index(Request $request)
    {
        $search = request('search');
        if ($search) {

            $search = Post::when($request->has('search'), function ($whenQuery) use ($request) {
                $whenQuery->where('title', 'like', '%' . $request->search . '%');
            })
                ->orderByDesc('created_at')
                ->paginate(10)
                ->withQueryString();
            return view('posts.search', compact('search', 'search'));
        } else {
            $posts = $this->post->where('is_active', true)->latest()->paginate(5);

            return view('posts.index', compact('posts', 'search'));
        }
    }

    public function show($post)
    {
        $post = $this->post->where('slug', $post)->firstOrFail();

        return view('posts.post', compact('post'));
    }
}