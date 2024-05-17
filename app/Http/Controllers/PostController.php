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

    public function show(string $slug)
    {
        return PostResource::make($this->postService->getActiveBySlug($slug))->withBody();
    }

    public function hide(string $slug)
    {
        $this->postService->hideBySlug($slug);

        return response()->json([
            'message' => 'Success hidden'
        ]);
    }
}
