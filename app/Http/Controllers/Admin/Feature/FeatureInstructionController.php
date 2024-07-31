<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Models\Post;
use App\Traits\Slug;
use App\Traits\Uploader;
use Illuminate\Http\Request;
use App\Models\FeatureInstruction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Feature\FeatureInstructionRequest;

class FeatureInstructionController extends Controller
{
    use Uploader, Slug;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $featureSlug = request()->featureSlug;

        $feature = Post::where('slug', $featureSlug)->first()->id;
        $featureInstructions = FeatureInstruction::where('post_id', $feature)->paginate();

        return view('admin.feature-instruction.index', compact('featureInstructions', 'featureSlug'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $featureSlug = request()->featureSlug;
        return view('admin.feature-instruction.create', compact('featureSlug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FeatureInstructionRequest $request)
    {

        $preview = $this->saveFile($request, 'photo');
        $feature = Post::where('slug', $request->featureSlug)->first()->id;
        FeatureInstruction::create([
            "instruction" => $request->instruction,
            "post_id" => $feature,
            "photo" => $preview,
            "lang" => $request->lang ?? 'en',
            "slug" => $this->slugValue($request->instruction),
        ]);

        return redirect()->route('admin.feature-instruction.index', ['featureSlug' => $request->featureSlug])->with('message', 'Feature instruction created successfully');

    }

    public function edit(FeatureInstruction $featureInstruction)
    {
$featureSlug=$featureInstruction->post->slug;
       
        return view('admin.feature-instruction.edit', compact('featureInstruction','featureSlug'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FeatureInstructionRequest $request,FeatureInstruction $featureInstruction)
    {
        $preview = $request->hasFile("photo") ? $this->saveFile($request, 'photo') : $featureInstruction->photo;
        $featureInstruction->update([
            "instruction" => $request->instruction,
            "photo" => $preview,
            "lang" => $request->lang ?? $featureInstruction->lang,
            "slug" => $this->slugValue($request->instruction),
        ]);
  
        return redirect()->route('admin.feature-instruction.edit', ['featureSlug' => $request->featureSlug, 'featureInstruction' => $featureInstruction->slug])->with('message', 'Feature instruction updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeatureInstruction $featureInstruction)
    {
        $this->removeFile($featureInstruction->photo);
        $featureInstruction->delete();
        redirect()->back()->with('message', 'Feature instruction deleted successfully');
    }
}
