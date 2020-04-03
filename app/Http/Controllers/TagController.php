<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function getTags()
    {
       $tags = Tag::all();
       return response()->json($tags, 200);
    }

    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->tag;
        $tag->save();
        return response()->json(true, 200);
    }
}
