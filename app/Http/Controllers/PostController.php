<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Interface\PostServiceInterface;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        try {
            return PostResource::make($this->postService->getActiveBySlug($slug))->withBody();
        } catch (ModelNotFoundException) {
            abort(404, 'Post not found');
        } catch (Exception $e) {
            abort(500, $e->getMessage());
        }
    }

    public function hide(string $post_id)
    {
        try {
            $this->postService->hide((int)$post_id);
        } catch (ModelNotFoundException) {
            abort(404, 'Post not found');
        } catch (Exception $e) {
            abort(500, $e->getMessage());
        }

        return response()->json([
            'message' => 'Success hidden'
        ]);
    }
}
