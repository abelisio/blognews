<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\CommentPost;
use App\Models\Comment;
use App\Models\Post;


class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {


        $validated = $request->validate([
            'comment' => 'required'
        ]);

        $created = Comment::create([
            'comment' => $validated['comment'],
            'post_id' => $post->id
        ]);


        return back()->with('error_create_comment', 'Ocorreu um erro ao cadastrar o comentário, tente novamente em alguns segundos');
    }

    public function destroy(Comment $comment)
    {

        $comment->delete();

        return back();
    }
}
