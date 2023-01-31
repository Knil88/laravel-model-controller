<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use App\Models\MoviesModel;
class MoviesController extends Controller
{
  public function index(){
    $data = ['Titolo' => 'MOVIE DB'];
    $movies= Movies::all();
    $data = ['movies' => $movies];
    return
         
         view('home',$data);
        
  }
}
