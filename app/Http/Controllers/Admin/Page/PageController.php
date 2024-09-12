<?php

namespace App\Http\Controllers\Admin\Page;
use Exception;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\PageRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function index()
    {
        $pages = Page::paginate(10);

        $count = Page::selectRaw('count(*) as total_page, sum(case when status = 1 then 1 else 0 end) as active_page')
        ->first();
     
        return view('admin.page.index', compact('pages','count'));
    }

    public function create()
    {
        $types=Page::$types;
        return view('admin.page.create',compact('types'));
    }

    public function store(PageRequest $request)
    {

        // dd($request->all());
        DB::beginTransaction();
        try {

            $page = Page::create([
                "title" => $request->title,
                'slug' => Str::slug($request->type),
                "content" => $request->content,
                "type"=>$request->type,
                "status" => $request->status ? 1 : 0,
            ]);
            $page->meta()->create([
                "title" => $request->meta_title,
                "keywords" => $request->meta_keywords,
                "description" => $request->meta_description,
                "image" => $request->hasFile("meta_image") ? $this->saveFile($request, 'meta_image') : "",
            ]);
        

            DB::commit();

            return response()->json([
                'message' => __('Page Created Successfully'),
                'redirect' => route('admin.page.index'),
            ]);
        } catch (Exception $th) {
            DB::rollback();

            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }
   
    public function edit(Page $page)
    {
        $types=Page::$types;
       return view('admin.page.edit', compact('page','types'));
    }

    public function update(PageRequest $request,Page $page)
    {

        DB::beginTransaction();
        try {

            $page->update([
                "title" => $request->title,
                'slug' => Str::slug($request->type),
                "content" => $request->content,
                "type"=>$request->type,
                "status" => $request->status ? 1 : 0,
            ]);
            $page->meta()->update([
                "title" => $request->meta_title,
                "keywords" => $request->meta_keywords,
                "description" => $request->meta_description,
                "image" => $request->hasFile("meta_image") ? $this->saveFile($request, 'meta_image') : "",
            ]);

            DB::commit();

            return response()->json([
                'message' => __('Page updated Successfully'),
                'redirect' => route('admin.page.index'),
            ]);
        } catch (Exception $th) {
            DB::rollback();

            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }
   
    public function destroy(Page $page)
    {
        DB::transaction(function () use ($page) {
            $page->meta->delete();
            $page->delete();
        });
        return response()->json([
            'message' => __('page  Deleted Successfully'),
            'redirect' => route('admin.page.index'),
        ]);
    }
}
