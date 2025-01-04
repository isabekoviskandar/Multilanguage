<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
    
        return PostResource::collection($posts);
    }
    
    

    public function show($id)
    {
        $post = Post::with('category')->find($id);

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        return new PostResource($post);
    }

    public function store(Request $request)
    {
        // dd(123);
        // return $request->all();
        // dd($request->all());
        $post = Post::create([
            'category_id' => $request->category_id,
            'title' => [
                'uz' => $request->title_uz,
                'en' => $request->title_en,
                'ru' => $request->title_ru
            ],
            'description' => [
                'uz' => $request->description_uz,
                'en' => $request->description_en,
                'ru' => $request->description_ru
            ],
        ]);

        return response()->json([
            'message' => 'Post created successfully!',
            'data' => new PostResource($post),
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $request->validate([
            'category_id' => 'nullable|exists:categories,id',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $post->update([
            'category_id' => $request->category_id ?? $post->category_id,
            'category_id' => $request->category_id,
            'title' => [
                'uz' => $request->title_uz,
                'en' => $request->title_en,
                'ru' => $request->title_ru
            ],
            'description' => [
                'uz' => $request->description_uz,
                'en' => $request->description_en,
                'ru' => $request->description_ru
            ],
        ]);

        return response()->json([
            'message' => 'Post updated successfully!',
            'data' => new PostResource($post),
        ], 201);
    }

    public function delete($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }
}
