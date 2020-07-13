<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AndroidController extends Controller
{
    public function getData(){

    }

    public function postData(Request $request){
      // $value = $request->value;
      $name = $request->name;
      $value = $request->value;
      
      return response('성공', 200, ['name'=>$name, 'value'=>$value]);
    }
}
