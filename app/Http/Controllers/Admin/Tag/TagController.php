<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\TagRequest;
use Illuminate\Support\Str;
class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:blog-tags');
    }

   
    public function index()
    {
        $tags = Tag::latest()->paginate(10);
        $count=Tag::selectRaw('count(*) as total_tag, sum(case when status = 1 then 1 else 0 end) as active_tag')
        ->first();
        return view('admin.tag.index', compact('tags','count'));
    }

   
    public function store(TagRequest $request)
    {
        Tag::create([
            'title' => $request->title,
            'status' => $request->status,
            'slug' => Str::slug($request->title['en']),
        ]);
        return response()->json([
            'message' => __('Tag created successfully.'),
            'redirect' => route('admin.tag.index'),
        ]);

    }

   
    public function update(TagRequest $request, Tag $tag)
    {
        
        $tag->update([
            "title" => $request->title,
            "slug" => $request->title['en'],
            "status" => $request->status,
        ]);

        return response()->json([
            'message' => __('Tag updated successfully.'),
            'redirect' => route('admin.tag.index'),
        ]);
    }

  
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return response()->json([
            'message' => __('Tag deleted successfully.'),
            'redirect' => route('admin.tag.index'),
        ]);
    }
}
