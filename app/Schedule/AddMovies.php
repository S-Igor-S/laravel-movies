<?php

namespace App\Schedule;

use App\Models\Movie;

class AddMovies
{
    /**
     * Get the TMDB api key.
     *
     * @param  string  $apiKey
     *
     * @param  string  $response
     *
     * @param  int  $page
     *
     * @param  array  $movies
     *
     * //     * @return array
     */
    public function __invoke()
    {
        $apiKey = "4cfd492e96032cebac671d980c203663";
        $page   = 1;
        do {
            $response  = "https://api.themoviedb.org/3/discover/movie?api_key=".$apiKey."&page=".$page;
            $apiResult = json_decode(file_get_contents($response), true);
            $movies    = $apiResult['results'];
            array_map(function ($movie) {
                Movie::firstOrCreate([
                    'name'        => $movie['title'],
                    'description' => $movie['overview'],
                    'tmdb_id'     => $movie['id'],
                    'poster'      => $movie['poster_path']
                ],
                );
            }, $movies);

            $page += 1;
        } while ($page <= $apiResult['total_pages']);

    }
}
