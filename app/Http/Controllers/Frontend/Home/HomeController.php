<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Traits\Seo;
use App\Models\Page;
use App\Models\Plan;
use App\Models\Post;
use App\Models\User;
use App\Models\Feature;
use Illuminate\Http\Request;
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
        $faqs = Post::where('type', 'faq')->where('featured', 1)->where('lang', $locale)->with('excerpt')->latest()->limit(6)->get();
        $plans = Plan::where('status', 1)->where('is_featured', 1)->latest()->get();
        $this->metadata('seo_home');
        $counter = get_option('counter', true, true, false, current_locale());
        $userCount=User::count();
        return view('frontend.index', compact('userCount','counter', 'faqs', 'plans'));
    }



    public function about()
    {
        $about = get_option('about', true, true, false, current_locale());
        $counter = get_option('counter', true, true, false, current_locale());
        $descriptions = explode('<br>', $about->description ?? '');
        $facilities = explode(',', $about->facilities ?? '');
        $features = Feature::where('status', 1)->latest()->take(6)->get();

        $teams = Post::where('type', 'team')->with('excerpt', 'preview')->latest()->get()->map(function ($query) {
            $data['name'] = $query->title;
            $data['position'] = $query->slug;
            $data['avatar'] = $query->preview->value ?? '';
            $data['socials'] = json_decode($query->excerpt->value ?? '');

            return $data;
        });

        $faqs = Post::where('type', 'faq')->where('featured', 1)->where('lang', app()->getLocale())->with('excerpt')->limit(6)->latest()->get();

        $plans = Plan::where('status', 1)->where('is_featured', 1)->latest()->get();
        $userCount=User::count();
        $this->metadata('seo_about');

        return view('frontend.about', compact('userCount','about', 'counter', 'descriptions', 'facilities', 'features', 'teams', 'faqs', 'plans'));
    }

   
    public function faq()
    {
        // $faqs = Post::where('type', 'faq')->where('lang', app()->getLocale())->with('excerpt')->latest()->get();
        $faqs = Post::where('type', 'faq')->where("lang",app()->getLocale())->with('excerpt')->latest()->get();
        $this->metadata('seo_faq');
        return view('frontend.faq', compact('faqs'));
    }

   
    public function page($slug)
    {

        $page = Page::where('status', 1)->with('meta')->where('slug', $slug)->first();
        $this->pageMeta($page->meta);
        return view('frontend.page', compact('page'));
    }
}
