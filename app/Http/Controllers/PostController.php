<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->tag) {
            $tag = Tag::find($request->tag);
            $posts = $tag->posts()->paginate(3);
            $categories = Category::all();
            $tags = Tag::all();
            $last_posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
            return view('blog.index', compact('posts', 'categories', 'last_posts', 'tags', 'tag'));
        } elseif ($request->category) {
            $category = Category::find($request->category);
            $posts = $category->posts()->paginate(3);
            $categories = Category::all();
            $tags = Tag::all();
            $last_posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
            return view('blog.index', compact('posts', 'categories', 'last_posts', 'tags', 'category'));
        } else {
            $posts = Post::orderBy('created_at', 'desc')->with('tags', 'category', 'user', 'comments')->paginate(3);
            $categories = Category::all();
            $tags = Tag::all();
            $last_posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
            return view('blog.index', compact('posts', 'categories', 'last_posts', 'tags'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPosts()
    {
        $posts = Post::orderBy('created_at', 'desc')->with('tags', 'category', 'user')->paginate(5);
        return response()->json($posts, 200);
    }

    public function getPost(Request $request)
    {
        $post = Post::where('id', $request->id)->with('tags', 'category', 'user')->get();
        return response()->json($post, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->post_title = $request->post_title;
        $post->slug = Str::slug($request->post_title, '-');
        $post->post_extract = $request->post_extract;
        $post->user_id = $request->user_id;
        $post->post_body = $request->post_body;
        $post->category_id = $request->category_post;
        if ($request->post_photo) {
            $base64_str = substr($request->post_photo, strpos($request->post_photo, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $post->post_photo ='https://cloud.pacificode.co/posts/'.$timestampName;
            Storage::disk('do')->put('posts/'.$timestampName, $image, 'public');
        }
        $post->save();
        $post->tags()->attach($request->tags);
        return response()->json(true, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::find($post->id);
        $categories = Category::all();
        $tags = Tag::all();
        $last_posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('blog.detail', compact('post', 'categories', 'tags', 'last_posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $post->post_title = $request->post_title;
        $post->post_extract = $request->post_extract;
        $post->user_id = $request->user_id;
        $post->post_body = $request->post_body;
        if ($request->category_post) {
            $post->category_id = $request->category_post;
        }
        if ($request->post_photo != $post->post_photo) {
            $base64_str = substr($request->post_photo, strpos($request->post_photo, ",")+1);
            $image = base64_decode($base64_str);
            $timestampName = microtime(true) . '.jpg';
            $post->post_photo ='https://cloud.pacificode.co/posts/'.$timestampName;
            Storage::disk('do')->put('posts/'.$timestampName, $image, 'public');
        }
        $post->save();
        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }
        return response()->json("Post actualizado", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        return response()->json("Post eliminado", 200);

    }
}
