<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Post;
use App\Traits\Seo;

class FeaturesController extends Controller
{
    use Seo;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Post::where('type', 'feature')->where('status', 1)->where('lang', app()->getLocale())->with('preview', 'excerpt')->latest()->get();

        $faqs = Post::where('type', 'faq')->where('featured', 1)->where('lang', app()->getLocale())->with('excerpt')->latest()->get();

        $this->metadata('seo_features');

        return view('frontend.features.list', compact('features', 'faqs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $features = Post::where('type', 'feature')->where('status', 1)->where('lang', app()->getLocale())->with('preview', 'excerpt')->latest()->get();

       
        $feature = Post::where('type', 'feature')->with('preview', 'excerpt', 'longDescription', 'banner','featureInstructions','featureServices')->where('lang', app()->getLocale())->where('slug', $slug)->first();
        // dd($feature);
        abort_if(empty($feature), 404);

        $plans = Plan::where('status', 1)->where('is_featured', 1)->latest()->get();

        $meta['title'] = $feature->title ?? '';
        $meta['description'] = $feature->excerpt->value ?? '';
        $meta['preview'] = $feature->preview->value ?? '';

        $this->pageMetaData($meta);

        return view('frontend.features.show', compact('plans', 'feature','features'));
    }
}
