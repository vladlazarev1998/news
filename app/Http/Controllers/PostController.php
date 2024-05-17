<?php

namespace App\Http\Controllers;

use App\Enum\PostStatus;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::active()->get());
    }

    public function show(string $post_id)
    {
        return PostResource::make(Post::active()->where('id', $post_id)->firstOrFail())->withBody();
    }

    public function hide(string $post_id)
    {
        $post = Post::findOrFail($post_id);
        $post->update(['status' => PostStatus::HIDDEN]);

        return response()->json([
            'message' => 'Success hidden'
        ]);
    }
}
