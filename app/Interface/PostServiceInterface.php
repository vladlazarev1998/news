<?php

namespace App\Interface;

use App\Models\Post;
use Illuminate\Support\Collection;

interface PostServiceInterface
{
    public function getAllActive(): Collection;

    public function getActiveBySlug(string $slug): Post;

    public function hide(int $post_id): void;
}
