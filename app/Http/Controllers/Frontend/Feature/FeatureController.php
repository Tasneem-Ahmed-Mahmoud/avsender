<?php

namespace App\Http\Controllers\Frontend\Feature;

use App\Traits\Seo;
use App\Models\Plan;
use App\Models\Feature;
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    use Seo;
    public function index()
    {
        $features = Feature::where('status', 1)->get(['id','title','slug','photo','description']);
        // dd($features[0]->getTranslation('description','en'));
        $this->metadata('seo_features');
        return view('frontend.feature.index',compact('features'));
    }

    public function show(Feature $feature)
    {
        $feature->load('meta','featureInstructions','featureServices');
        $features = Feature::where('status', 1)->get(['id','title','slug','photo','description']);
        $plans = Plan::where('status', 1)->where('is_featured', 1)->latest()->get();
        $this->pageMeta($feature->meta);
        return view('frontend.feature.show', compact('feature','plans','features'));
    }
}
