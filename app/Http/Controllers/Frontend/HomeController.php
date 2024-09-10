<?php

namespace App\Http\Controllers\Frontend;

use App\Traits\Seo;
use App\Models\Plan;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    use Seo;

    /**
     * Display a home page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = current_locale();

        $brands = Category::where('type', 'brand')->where('status', 1)->latest()->get();

        $testimonials = Post::where('type', 'testimonial')->with('preview', 'excerpt')->latest()->get();

        $faqs = Post::where('type', 'faq')->where('featured', 1)->where('lang', $locale)->with('excerpt')->latest()->limit(6)->get();

        $plans = Plan::where('status', 1)->where('is_featured', 1)->latest()->get();

        $this->metadata('seo_home');

        $home = get_option('home-page', true, true, false, current_locale());
        $features_area = $home->brand->status ?? 'active';
        $brand_area = $home->brand->status ?? 'active';
        $account_area = $home->account_area->status ?? 'active';

        $heading = str_replace('<strong>', '<span>', $home->heading->title ?? '');
        $heading = str_replace('</strong>', '</span>', $heading ?? '');

        $theme_path = get_option('theme_path');
        $theme_path = empty($theme_path) ? 'frontend.index' : $theme_path;
        $counter = get_option('counter', true, true, false, current_locale());
        $userCount=User::count();
        return view($theme_path, compact('userCount','counter','brands', 'testimonials', 'faqs', 'plans', 'home', 'features_area', 'brand_area', 'account_area', 'heading'));
    }

    /**
     * Display  team page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function team()
    {
        $teams = Post::where('type', 'team')->with('excerpt', 'preview')->latest()->get()->map(function ($query) {
            $data['name'] = $query->title;
            $data['position'] = $query->slug;
            $data['avatar'] = $query->preview->value ?? '';
            $data['socials'] = json_decode($query->excerpt->value ?? '');

            return $data;
        });
        $faqs = Post::where('type', 'faq')->where('featured', 1)->where('lang', app()->getLocale())->with('excerpt')->latest()->get();

        $this->metadata('seo_team');

        return view('frontend.team', compact('teams', 'faqs'));
    }

    /**
     * Display  about page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $about = get_option('about', true, true, false, current_locale());
        $counter = get_option('counter', true, true, false, current_locale());
        $descriptions = explode('<br>', $about->description ?? '');
        $facilities = explode(',', $about->facilities ?? '');

        $features = Post::where('type', 'feature')->where('featured', 1)->where('lang', app()->getLocale())->with('preview', 'excerpt')->latest()->take(6)->get();

        $teams = Post::where('type', 'team')->with('excerpt', 'preview')->latest()->get()->map(function ($query) {
            $data['name'] = $query->title;
            $data['position'] = $query->slug;
            $data['avatar'] = $query->preview->value ?? '';
            $data['socials'] = json_decode($query->excerpt->value ?? '');

            return $data;
        });

        $faqs = Post::where('type', 'faq')->where('featured', 1)->where('lang', app()->getLocale())->with('excerpt')->limit(6)->latest()->get();

        $plans = Plan::where('status', 1)->where('is_featured', 1)->latest()->get();

        $this->metadata('seo_about');
         $userCount=User::count();

       return view('frontend.about', compact('about', 'counter', 'descriptions', 'facilities', 'features', 'teams', 'faqs', 'plans'  , 'userCount'));
    }

    /**
     * Display  faq page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        // $faqs = Post::where('type', 'faq')->where('lang', app()->getLocale())->with('excerpt')->latest()->get();
        $faqs = Post::where('type', 'faq')->where("lang",app()->getLocale())->with('excerpt')->latest()->get();

        $this->metadata('seo_faq');

        return view('frontend.faq', compact('faqs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function page($slug)
    {

        $page = Post::where('status', 1)->where('type', 'page')->with('seo', 'description')->where('slug', $slug)->first();
   
        abort_if(empty($page), 404);

        $seo = json_decode($page->seo->value ?? '');

        $meta['title'] = $seo->title ?? '';
        $meta['description'] = $seo->description ?? '';
        $meta['tags'] = $seo->tags ?? '';

        $this->pageMetaData($meta);

        return view('frontend.page', compact('page'));
    }
}
