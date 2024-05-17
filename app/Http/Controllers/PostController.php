<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::all());
    }

    public function show(string $post_id)
    {
        return PostResource::make(Post::findOrFail($post_id));
    }

    public function hide(string $post_id)
    {
        $post = Post::findOrFail($post_id);
        $post->update(['hidden' => true]);

        return response()->json([
            'message' => 'Success hidden'
        ]);
    }
}
