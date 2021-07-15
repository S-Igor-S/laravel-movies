@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <article class="offset-1">
            <h1>
                {{ $movie->name }}
            </h1>
            <div class="row">
                <div class="col-sm">
                    <img class="" src="{{ $movie->PosterPath }}" alt="poster">
                </div>
                <div class="col-sm">
                    {{ $movie->description }}
                    <h4><a href="{{ $rootUrl }}/movies">Return to archive</a></h4>
                </div>
            </div>
        </article>
    </div>
@endsection
