<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

    /**
     * Get the poster's path.
     *
     * @return string
     */
    public function getPosterPathAttribute()
    {
        return "https://image.tmdb.org/t/p/w500".$this->poster;
    }
}
