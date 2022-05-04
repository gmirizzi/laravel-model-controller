<?php

namespace App\Http\Controllers;

use App\Movie;

class PageController extends Controller
{
    public function index(){
        $movies=Movie::all();
        $data=[
            'movies'=>$movies
        ];
        return view('index', $data);
    }
}
