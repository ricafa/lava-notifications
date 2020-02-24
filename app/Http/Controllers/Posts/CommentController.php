<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $comment = $request->user()->comments()->create($request->all());
        //dd($comment);

        return redirect()
            ->route('posts.show', $comment->post->id)
            ->withSuccess('Comentãrio realizado com sucesso');
    }
}
