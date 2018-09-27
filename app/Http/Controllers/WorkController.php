<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
class WorkController extends Controller
{
  /**
    * Display the specified resource.
    *
    * @param  string  $slug
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
      $works = Work::all();
      return view('welcome')->withWorks($works);
    }


}
