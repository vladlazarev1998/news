<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Interface\PostServiceInterface;

class PostController extends Controller
{
    public function __construct(private readonly PostServiceInterface $postService)
    {}

    public function index()
    {
        return PostResource::collection($this->postService->getAllActive());
    }

    public function show(string $post_id)
    {
        return PostResource::make($this->postService->getActive((int)$post_id))->withBody();
    }

    public function hide(string $post_id)
    {
        $this->postService->hide((int)$post_id);

        return response()->json([
            'message' => 'Success hidden'
        ]);
    }
}
