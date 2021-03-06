<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class PublicController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movie.index', compact('movies'));
    }
}
