<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index', [
            'movies' => Movie::paginate(20),
        ]);
    }
    public function single()
    {
        return view('movies.single');
    }
}
