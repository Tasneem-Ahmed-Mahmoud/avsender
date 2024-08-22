<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Str;

trait Uploader
{
    // Save file using File facade
    private function saveFile(Request $request, $input)
    {
        $file = $request->file($input);
        $ext = $file->extension();
        $filename = now()->timestamp . Str::random(20) . '.' . $ext;

        // Define the file path
        $path = 'uploads/' . date('y') . '/' . date('m') . '/';
        $filePath = public_path($path) . $filename;

        // Ensure the directory exists
        File::ensureDirectoryExists(public_path($path));

        // Move the file to the destination
        $file->move(public_path($path), $filename);

        // Return the relative URL to access the file
        return url($path . $filename);
    }

    // Remove file using File facade
    public function removeFile($url = null)
    {
        if (empty($url)) {
            return true;
        }

        $fileName = explode('uploads', $url);
        if (isset($fileName[1])) {
            $filePath = public_path('uploads' . $fileName[1]);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            return true;
        }

        return false;
    }
}
