<?php

namespace App\Http\Controllers\Admin\Feature;

use Exception;
use App\Models\Feature;
use App\Traits\Uploader;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Feature\FeatureRequest;

class FeatureController extends Controller
{
    use Uploader;
    public function index()
    {
        $features = Feature::paginate(10, ['slug', 'title', 'photo', 'description', 'id']);
        return view('admin.features.index', compact('features'));
    }

    public function create()
    {
        return view('admin.features.create');
    }

    public function store(FeatureRequest $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {

            $feature = Feature::create([
                "title" => $request->title,
                'slug' => Str::slug($request->title['en']),
                "description" => $request->description,
                "content" => $request->content,
                "status" => $request->status ? 1 : 0,
                "featured" => $request->featured ? 1 : 0,
                "photo" => $request->hasFile("photo") ? $this->saveFile($request, 'photo') : "",
                "banner" => $request->hasFile("photo") ? $this->saveFile($request, 'photo') : "",
            ]);

            $feature->meta()->create([
                "title" => $request->meta_title ?? $feature->getTranslation('title', 'en'),
                "keywords" => $request->meta_keywords ?? $feature->getTranslation('title', 'en'),
                "description" => $request->meta_description ?? $feature->getTranslation('description', 'en'),
                "image" => $request->hasFile("meta_image") ? $this->saveFile($request, 'meta_image') : "",
            ]);

            DB::commit();

            return response()->json([
                'message' => __('featureCreated Successfully'),
                'redirect' => route('admin.feature.index'),
            ]);
        } catch (Exception $th) {
            DB::rollback();

            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }

    }

    public function edit(Feature $feature)
    {
        $feature->load('meta');
        
        return view('admin.features.edit', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {

        DB::beginTransaction();
        try {
            $photo = $feature->photo;
            if ($request->hasFile('photo')) {
                $this->removeFile($feature->photo);
                $photo = $this->saveFile($request, 'photo');
    
            }
            $banner = $feature->banner;
            if ($request->hasFile('banner')) {
                $this->removeFile($feature->banner);
                $banner = $this->saveFile($request, 'banner');
    
            }
            $image = $feature->meta->image;
            if ($request->hasFile('meta_image')) {
                $this->removeFile($feature->meta->image);
                $image = $this->saveFile($request, 'meta_image');
            }

            $feature->update([
                "title" => $request->title,
                'slug' => Str::slug($request->title['en']),
                "description" => $request->description,
                "content" => $request->content,
                "status" => $request->status ? 1 : 0,
                "featured" => $request->featured ? 1 : 0,
                "photo" => $photo,
                "banner" => $banner,
            ]);
            $feature->meta()->update([
                "title" => $request->meta_title ?? $feature->getTranslation('title', 'en'),
                "keywords" => $request->meta_keywords ?? $feature->getTranslation('title', 'en'),
                "description" => $request->meta_description ?? $feature->getTranslation('description', 'en'),
                "image" =>$image,
            ]);

            DB::commit();

            // return response()->json([
            //     'message' => __('feature Updated Successfully'),
            //     'redirect' => route('admin.feature.index'),
            // ]);

            return redirect()->route('admin.features.index')->with('success', __('feature Updated Successfully'));
        } catch (Exception $th) {
            DB::rollback();

            return redirect()->back()->with('error', $th->getMessage());
            // return response()->json([
            //     'message' => $th->getMessage(),
            // ], 500);
        }
    }

  
    public function destroy(Feature $feature)
    {
        $this->removeFile($feature->photo);
        $this->removeFile($feature->banner);
        $this->removeFile($feature->meta->image);
        DB::transaction(function () use ($feature) {
            $feature->meta->delete();
            $feature->delete();
        });
        return response()->json([
            'message' => __('feature  Deleted Successfully'),
            'redirect' => route('admin.features.index'),
        ]);
      
    }
}
