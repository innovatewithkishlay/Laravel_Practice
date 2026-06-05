<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function uploadForm()
    {
        return view('File');
    }
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf',
        ]);
        $file = $request->file('file');
        $path = $file->store('photos', 'public');
        return response()->json([
            "message" => "file uploaded"
        ]);
    }
}
