<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

  /**
    * Display the specified resource.
    *
    * @param  string  $slug
    * @return \Illuminate\Http\Response
    */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
return view('post')->with('post', $post);
    }
}
