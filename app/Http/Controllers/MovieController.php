<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\URL;

class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index', [
            'movies' => Movie::paginate(20),
        ]);
    }

    public function single(Movie $movie)
    {
        return view('movies.single', [
            'rootUrl' => URL::to('/'),
            'movie'   => $movie,
        ]);
    }
}
