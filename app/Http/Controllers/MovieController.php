<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        var_dump($movies);
        return view("home", compact('movies'));
    }
}
