<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\Http\Resources\Post\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $posts = PostResource::collection($posts)->resolve();

        return inertia('Post/index', compact('posts'));

    }

    public function update(Post $post, UpdateRequest $request)
    {
        $post->update($request->validated());
        return redirect()->route('post.index');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return inertia('Post/Show', compact('post'));
    }

    public function edit(Post $post)
    {
        return inertia('Post/Edit', compact('post'));
    }


    public function create()
    {
        return inertia('Post/Create');
    }

    public function store(StoreRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('post.index');
    }
}
