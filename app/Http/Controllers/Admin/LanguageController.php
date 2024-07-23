<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Cache;
use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:language');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $languages = get_option('languages', true);
        $countries = lang_path('langlist.json');
        $countries = json_decode(file_get_contents($countries), true);

        return view('admin.language.index', compact('languages', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $file = lang_path('default.json');
        $file = file_get_contents($file);
        File::put(lang_path($request->language_code.'.json'), $file);
        $languages = get_option('languages', true);

        $arr = [];
        if (! empty($languages)) {
            foreach ($languages as $key => $value) {
                $arr[$key] = $value;
            }
        }

        $arr[$request->language_code] = $request->name;

        $langlist = Option::where('key', 'languages')->first();
        if (empty($langlist)) {
            $langlist = new Option;
            $langlist->key = 'languages';
        }
        $langlist->value = json_encode($arr);
        $langlist->save();
        Cache::forget('languages');

        return response()->json([
            'redirect' => route('admin.language.show', $request->language_code),
            'message' => __('Language Created successfully.'),
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $file = lang_path($id.'.json');
        $posts = file_get_contents($file);
        $posts = json_decode($posts);

        return view('admin.language.show', compact('posts', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = [];
        foreach ($request->values as $key => $row) {
            $data[$key] = $row;
        }

        $file = json_encode($data, JSON_PRETTY_PRINT);
        File::put(lang_path($id.'.json'), $file);

        return response()->json([
            'redirect' => route('admin.language.index'),
            'message' => __('Settings Updated Successfully.'),
        ]);
    }

    public function addKey(Request $request)
    {
        $request->validate([
            'key' => 'required',
            'value' => 'required',
        ]);

        $file = lang_path($request->id.'.json');
        $posts = file_get_contents($file);
        $posts = json_decode($posts);
        foreach ($posts as $key => $row) {
            $data[$key] = $row;
        }
        $data[$request->key] = $request->value;

        File::put(lang_path($request->id.'.json'), json_encode($data, JSON_PRETTY_PRINT));

        return response()->json([
            'message' => __('Key Added Successfully.'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $posts = Option::where('key', 'languages')->first();
        $languages = json_decode($posts->value);

        $data = [];
        foreach ($languages as $key => $row) {
            if ($id != $key) {
                $data[$key] = $row;
            }
        }

        $posts->value = json_encode($data);
        $posts->save();

        if (file_exists(lang_path($id.'.json'))) {
            unlink(lang_path($id.'.json'));
        }

        Cache::forget('languages');

        return response()->json([
            'redirect' => route('admin.language.index'),
            'message' => __('Language Removed successfully.'),
        ]);

    }
}
