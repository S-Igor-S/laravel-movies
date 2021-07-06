@extends('layouts/app')

@section('movies')
    @foreach ($movies as $movie)
        <article class="offset-1">
            <h1>
                {{ $movie->name }}
            </h1>
            <h2>
            </h2>
            <div class="row">
                <div class="col-sm">
                    <img class="" src="{{ $movie->PosterPath }}" alt="poster">
                </div>
                <div class="col-sm">
                    {{ $movie->description }}
                </div>
            </div>
        </article>
        <hr>
    @endforeach
@endsection
