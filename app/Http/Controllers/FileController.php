<?php
namespace App\Http\Controllers;
use App\Post;
use App\Work;
use App\Category;
use App\File;
use Auth;
use Illuminate\Http\Request;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function files()
     {
       $currentUser = Auth::user()->id;
      $files = File::all()->where('user_id',$currentUser);

      return view('files')->withFiles($files) ;
     }


    public function index()
    {
      $works = Work::all();
        $posts=Post::all();
        $files=File::all();
        $categories = Category::all();
      // return view('welcome', compact('works','posts'));

       return view('files')->with([
           'posts' => $posts,
           'files' =>$files,
        'categories' => $categories,
           //'categoryName' => $categoryName,
           'works'=>$works,
            ]);
    }
}
