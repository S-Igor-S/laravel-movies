<?php

namespace App\Schedule;

use App\Models\Movie;
use Illuminate\Support\Facades\Http;
use \Illuminate\Support\Str;

class AddMovies
{
    /**
     * Get the TMDB api key.
     *
     * @param  string  $response
     *
     * @param  int  $page
     *
     * @param array $apiResult
     *
     * @param  array  $movies
     */
    public function __invoke()
    {
        $page   = 1;
        do {
            $response = Http::get('https://api.themoviedb.org/3/discover/movie', [
                'api_key' => env('API_KEY'),
                'page' => $page,
            ]);
            $apiResult = $response->json();
            $movies    = $apiResult['results'];
            array_map(function ($movie) {
                Movie::firstOrCreate([
                    'name'        => $movie['title'],
                    'description' => $movie['overview'],
                    'tmdb_id'     => $movie['id'],
                    'poster'      => $movie['poster_path'],
                    'slug' => strtolower(Str::slug($movie->name, "_"))
                ],
                );
            }, $movies);

            $page += 1;
        } while ($page <= $apiResult['total_pages']);

    }
}
