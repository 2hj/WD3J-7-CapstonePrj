<?php

namespace App\Http\Controllers;

use App\StretchPost;
use Illuminate\Http\Request;

class WaistInfoController extends Controller
{
    public function index(){
      $stretch_posts = \App\StretchPost::get();

      return view('waistinfo');
    }
}
