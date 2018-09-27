<?php

namespace App\Http\Controllers;
use App\Portfolio;
use App\work;
use App\category;
use App\Post;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
  public function index()
  {
      $posts=Post::all();
    $works = Work::all();
      $categories = Category::all();
    // return view('welcome', compact('works','posts'));

     return view('portfolio')->with([

      'categories' => $categories,
'posts' => $posts,
         //'categoryName' => $categoryName,
         'works'=>$works,
          ]);
  }
}
