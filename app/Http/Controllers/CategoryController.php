<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // dd($categories);
        return view('multi' , compact('categories'));
    }

    
    public function store(Request $request){
        $category = Category::create([
            'name' => [
                'uz' => $request->name_uz,
                'en' => $request->name_en,
                'ru' => $request->name_ru
            ],
            'order' => $request->order
        ]);
        return view('multi' , compact('category'));
    }

    

    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }
        return new CategoryResource($category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $request->validate([
            'name' => 'nullable|string|max:255',
        ]);

        $category->update([
            'name' => [
                'uz' => $request->name_uz,
                'en' => $request->name_en,
                'ru' => $request->name_ru
            ],
            'order' => $request->order
        ]);

        return response()->json([
            'message' => 'Category update successfully!',
            'data' => new CategoryResource($category),
        ], 201);
    }

    public function delete($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $category->delete();

        return response()->json(['message' => 'Category deleted successfully']);
    }
}
