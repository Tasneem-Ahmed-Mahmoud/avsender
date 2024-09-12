<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Traits\Slug;
use App\Models\Feature;
use App\Traits\Uploader;
use Illuminate\Http\Request;
use App\Models\FeatureService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Feature\FeatureServiceRequest;

class FeatureServiceController extends Controller
{
    use Uploader, Slug;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $featureSlug = request()->featureSlug;

        $feature = Feature::where('slug', $featureSlug)->first()->id;
        $featureServices = FeatureService::where('feature_id', $feature)->paginate();

        return view('admin.feature-service.index', compact('featureServices', 'featureSlug'));
    }

  
    public function create()
    {
        $featureSlug = request()->featureSlug;
        return view('admin.feature-service.create', compact('featureSlug'));
    }


    public function store(FeatureServiceRequest $request)
    {

        $preview = $this->saveFile($request, 'photo');
        $feature = Feature::where('slug', $request->featureSlug)->first()->id;
        FeatureService::create([
            "description" => $request->description,
            "feature_id" => $feature,
            "photo" => $preview,
            "slug" => $this->slugValue($request->description['en']),
        ]);

        return redirect()->route('admin.feature-service.index', ['featureSlug' => $request->featureSlug])->with('message', 'Feature service created successfully');

    }

    public function edit(FeatureService $featureService)
    {
     $featureSlug=$featureService->feature->slug;
       
        return view('admin.feature-service.edit', compact('featureService','featureSlug'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FeatureServiceRequest $request,FeatureService $featureService)
    {
        $preview = $request->hasFile("photo") ? $this->saveFile($request, 'photo') : $featureService->photo;
        $featureService->update([
            "description" => $request->description,
            "photo" => $preview,
            "slug" => $this->slugValue($request->description['en']),
        ]);
  
        return redirect()->route('admin.feature-service.edit', ['featureSlug' => $request->featureSlug, 'featureService' => $featureService->slug])->with('message', 'Feature service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeatureService $featureService)
    {
        $this->removeFile($featureService->photo);
        $featureService->delete();
        redirect()->back()->with('message', 'Feature service deleted successfully');
    }
}
