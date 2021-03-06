<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('id', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param $slug
     *
     * @return Response
     */
    public function show(Request $request, $slug)
    {
        $post = Post::with('user')->where('slug', $slug)->firstOrFail();

        return view('posts.show', compact('post'));
    }
}
