<?php

namespace App\Http\Controllers;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
  public function index()
  {
    $videos = Video::all();
    return view('videos', ['videos' => $videos]);
  }
}
