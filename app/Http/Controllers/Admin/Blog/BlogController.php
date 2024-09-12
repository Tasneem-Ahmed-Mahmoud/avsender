<?php

namespace App\Http\Controllers\Admin\Blog;

use Exception;
use App\Models\Tag;
use App\Models\Blog;
use App\Models\Category;
use App\Traits\Uploader;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\BlogRequest;

class BlogController extends Controller
{
    use Uploader;
    public function __construct()
    {
        $this->middleware('permission:blogs');
    }
    public function index()
    {
        $blogs = Blog::paginate(10, ['id', 'slug', 'title', 'photo','created_at','publish']);
        $totalBlogs = Blog::count();
        $activeBlogs = Blog::where('publish', '1')->count();
        return view('admin.blog.index', compact('blogs','totalBlogs','activeBlogs'));
    }

    public function create()
    {
        $categories=Category::get(['title','id']);
        $tags=Tag::get(['title','id']);
        return view('admin.blog.create',compact('tags','categories'));
    }

    public function store(BlogRequest $request)
    {

        // dd($request->all());
        DB::beginTransaction();
        try {

            $blog = Blog::create([
                "title" => $request->title,
                'slug' => Str::slug($request->title['en']),
                "description" => $request->description,
                "content" => $request->content,
                "publish" => $request->publish ? 1 : 0,
                "featured" => $request->featured ? 1 : 0,
                "photo" => $request->hasFile("photo") ? $this->saveFile($request, 'photo') :"",
            ]);
            // dd($request->categories);
            $blog->tags()->attach($request->tags);

            $blog->categories()->attach($request->categories);
            

            $blog->meta()->create([
                "title" => $request->meta_title,
                "keywords" => $request->meta_keywords,
                "description" => $request->meta_description,
                "image" => $request->hasFile("meta_image") ? $this->saveFile($request, 'meta_image') : "",
            ]);

            DB::commit();

            return response()->json([
                'message' => __('Blog Created Successfully'),
                'redirect' => route('admin.blog.index'),
            ]);
        } catch (Exception $th) {
            DB::rollback();

            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }
    public function edit(Blog $blog)
    {
        $blog->load('meta','categories','tags');
        $categories=Category::get(['title','id']);
        $tags=Tag::get(['title','id']);
        return view('admin.blog.edit', compact('blog','categories','tags'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        $photo = $blog->photo;
        if ($request->hasFile('photo')) {
            $this->removeFile($blog->photo);
            $photo = $this->saveFile($request, 'photo');

        }
        $image = $blog->meta->image;
        if ($request->hasFile('meta_image')) {
            $this->removeFile($blog->meta->image);
            $image = $this->saveFile($request, 'meta_image');
        }

        DB::beginTransaction();
        try {

            $blog->update([
                "title" => $request->title,
                'slug' => Str::slug($request->title['en']),
                "description" => $request->description,
                "content" => $request->content,
                "publish" => $request->publish ? 1 : 0,
                "featured" => $request->featured ? 1 : 0,
                "photo" => $photo,
            ]);
            $blog->categories()->sync($request->categories);
            $blog->tags()->sync($request->tags);


            $blog->meta()->update([
                "title" => $request->meta_title,
                "keywords" => $request->meta_keywords,
                "description" => $request->meta_description,
                "image" => $image,
            ]);
            DB::commit();

            return response()->json([
                'message' => __('Blog Updated Successfully'),
                'redirect' => route('admin.blog.index'),
            ]);
        } catch (Exception $th) {
            DB::rollback();

            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function destroy(Blog $blog)
    {
        $this->removeFile($blog->photo);
        $this->removeFile($blog->meta->image);
        DB::transaction(function () use ($blog) {
            $blog->categories()->detach();
            $blog->tags()->detach();
            $blog->meta->delete();
            $blog->delete();
        });
        return response()->json([
            'message' => __('Blog  Deleted Successfully'),
            'redirect' => route('admin.blog.index'),
        ]);

    }
}
