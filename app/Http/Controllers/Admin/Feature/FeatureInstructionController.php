<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Feature\FeatureInstructionRequest;
use App\Models\Feature;
use App\Models\FeatureInstruction;
use App\Traits\Slug;
use App\Traits\Uploader;
use Illuminate\Http\Request;

class FeatureInstructionController extends Controller
{
    use Uploader, Slug;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $featureSlug = request()->featureSlug;

        $feature = Feature::where('slug', $featureSlug)->first()->id;
        $featureInstructions = FeatureInstruction::where('feature_id', $feature)->paginate();
        // dd($featureInstructions);
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
        $feature = Feature::where('slug', $request->featureSlug)->first()->id;
        FeatureInstruction::create([
            "instruction" => $request->instruction,
            "feature_id" => $feature,
            "photo" => $preview,
            "slug" => $this->slugValue($request->instruction['en']),
        ]);

        return redirect()->route('admin.feature-instruction.index', ['featureSlug' => $request->featureSlug])->with('message', 'Feature instruction created successfully');

    }

    public function edit(FeatureInstruction $featureInstruction)
    {
        $featureSlug = $featureInstruction->feature->slug;
        return view('admin.feature-instruction.edit', compact('featureInstruction', 'featureSlug'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FeatureInstructionRequest $request, FeatureInstruction $featureInstruction)
    {
        $preview = $request->hasFile("photo") ? $this->saveFile($request, 'photo') : $featureInstruction->photo;
        $featureInstruction->update([
            "instruction" => $request->instruction,
            "photo" => $preview,
            "slug" => $this->slugValue($request->instruction['en']),
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
