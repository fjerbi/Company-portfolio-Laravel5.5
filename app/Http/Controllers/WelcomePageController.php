<?php
namespace App\Http\Controllers;
use App\Post;
use App\Work;
use App\Category;
use App\File;
use Illuminate\Http\Request;
class WelcomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $works = Work::all();
        $posts=Post::all();
        $files=File::all();
        $categories = Category::all();
      // return view('welcome', compact('works','posts'));

       return view('welcome')->with([
           'posts' => $posts,
           'files' =>$files,
        'categories' => $categories,
           //'categoryName' => $categoryName,
           'works'=>$works,
            ]);
    }
}
