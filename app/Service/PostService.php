<?php

namespace App\Service;

use App\Enum\PostStatus;
use App\Interface\PostServiceInterface;
use App\Models\Post;
use Illuminate\Support\Collection;

class PostService implements PostServiceInterface
{
    public function getAllActive(): Collection
    {
        return Post::active()->get();
    }

    public function getActiveBySlug(string $slug): Post
    {
        return Post::active()->where('slug', $slug)->firstOrFail();
    }

    public function hideBySlug(string $slug): void
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->update(['status' => PostStatus::HIDDEN]);
    }
}
