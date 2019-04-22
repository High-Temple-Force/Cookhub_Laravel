<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\Tag;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with(['comments', 'tags'])->orderBy('created_at', 'desc')->get();
        foreach($posts as $post){
            foreach($post->tags as $tag){
                echo($tag->tagname);
            };
        };
        exit;

        return view('posts.index', [
            'posts' => $posts,
            ]);
    }

    public function create()
    {
        $tags = Tag::all();
        return view('posts.create', [
            'tags' => $tags,
        ]);
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:50',
            'hody' => 'required|max:200',
        ]);
        Post::create($params)->tags()->attach($request->tags);
        return redirect()->route('top');
    }

    public function show($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update($post_id, Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:50',
            'hody'=> 'required|max:2000',
        ]);
        $post = Post::findOrFail($post_id);
        $post->fill($params)->save();
        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function destroy($post_id)
    {
        $post = Post::findOrFail($post_id);

        DB::transaction(function () use ($post) {
            $post->comments()->delete();
            $post->delete();
        });

        return redirect()->route('top');
    }

}