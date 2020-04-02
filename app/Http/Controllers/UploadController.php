<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function imagePost(Request $request)
    {
        try {
            $base64_str = substr($request->photo, strpos($request->photo, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $url ='https://cloud.pacificode.co/posts/'.$timestampName;
            Storage::disk('do')->put('posts/'.$timestampName, $image, 'public');
            return response()->json($url, 200);
        } catch (\Throwable $th) {
            return response()->json(false, 500);
        }

    }
}
