<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Feature\FeatureServiceRequest;
use App\Models\FeatureService;
use App\Models\Post;
use App\Traits\Slug;
use App\Traits\Uploader;
use Illuminate\Http\Request;

class FeatureServiceController extends Controller
{
    use Uploader, Slug;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $featureSlug = request()->featureSlug;

        $feature = Post::where('slug', $featureSlug)->first()->id;
        $featureServices = FeatureService::where('post_id', $feature)->paginate();

        return view('admin.feature-service.index', compact('featureServices', 'featureSlug'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $featureSlug = request()->featureSlug;
        return view('admin.feature-service.create', compact('featureSlug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FeatureServiceRequest $request)
    {

        $preview = $this->saveFile($request, 'photo');
        $feature = Post::where('slug', $request->featureSlug)->first()->id;
        FeatureService::create([
            "description" => $request->description,
            "post_id" => $feature,
            "photo" => $preview,
            "lang" => $request->lang ?? 'en',
            "slug" => $this->slugValue($request->description),
        ]);

        return redirect()->route('admin.feature-service.index', ['featureSlug' => $request->featureSlug])->with('message', 'Feature service created successfully');

    }

    public function edit(FeatureService $featureService)
    {
$featureSlug=$featureService->post->slug;
       
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
            "lang" => $request->lang ?? $featureService->lang,
            "slug" => $this->slugValue($request->description),
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
