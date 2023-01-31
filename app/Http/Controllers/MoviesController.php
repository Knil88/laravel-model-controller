<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
  public function index(){
    $data = ['Titolo' => 'MOVIE DB'];
    return
         
         view('home',$data);
        
  }
}
