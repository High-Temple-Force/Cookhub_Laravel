<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TagController extends Controller
{
    //
    public function store(Request $request)
    {
        $params = $request->validate([
            'id' => 'required|exists:posts,id',
            'tagname' => 'required|max:20',
        ]);
        $post = Post::findorFail($params['post_id']);
        $post->tags()->create($params);

        return redirect()->route('posts.show', ['post' => $post]);
    }
}
