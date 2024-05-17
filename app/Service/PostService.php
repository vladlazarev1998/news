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

    public function hide(int $post_id): void
    {
        $post = Post::findOrFail($post_id);
        $post->update(['status' => PostStatus::HIDDEN]);
    }
}
