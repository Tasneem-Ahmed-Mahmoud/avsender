<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:blogs-category');
    }
    public function index()
    {
        $categories = Category::get();

        $count = Category::selectRaw('count(*) as total_category, sum(case when status = 1 then 1 else 0 end) as active_category')
        ->first();
    
        return view('admin.category.index', compact('categories', 'count'));

    }
    public function store(CategoryRequest $request)
    {
        Category::create([
            'title' => $request->title,
            'status' => $request->status,
            'slug' => Str::slug($request->title['en']),
        ]);

        return response()->json([
            'message' => __('Category created successfully.'),
            'redirect' => route('admin.category.index'),
        ]);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        
        $category->update([
            "title" => $request->title,
            "slug" => $request->title['en'],
            "status" => $request->status,
        ]);

        return response()->json([
            'message' => __('Category updated successfully.'),
            'redirect' => route('admin.category.index'),
        ]);
    }

  
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'message' => __('Category deleted successfully.'),
            'redirect' => route('admin.category.index'),
        ]);
    }
}
