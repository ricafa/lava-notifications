<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentFormRequest;
use App\Notifications\PostCommented;

class CommentController extends Controller
{
    public function store(StoreCommentFormRequest $request)
    {
        //dd($request->all());
        $comment = $request->user()->comments()->create($request->all());
        //dd($comment);

        $author = $comment->post->user;
        $author->notify(new PostCommented($comment));

        return redirect()
            ->route('posts.show', $comment->post->id)
            ->withSuccess('Comentário realizado com sucesso');
    }
}
