<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Traits\Seo;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    use Seo;
    public function index(Request $request)
    {

        $blogs = Blog::latest()->paginate(9,['slug','title','photo','description']);
        $this->metadata('seo_blog');
        return view('frontend.blog.list', compact('blogs'));
    }

    public function show(Blog $blog){
        $this->pageMeta($blog->meta);
        return view('frontend.blog.show', compact('blog'));

    }
}
