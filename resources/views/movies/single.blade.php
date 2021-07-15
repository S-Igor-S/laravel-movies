@extends('layouts.app')

@section('content')
    <article class="offset-1">
        <h1>
            {{ 'Hello world' }}
        </h1>
        <h2>
        </h2>
        <div class="row">
            <div class="col-sm">
{{--                <img class="" src="{{ $movie->PosterPath }}" alt="poster">--}}
            </div>
            <div class="col-sm">
                {{ 'Lorem ipsum, Hello world' }}
            </div>
        </div>
    </article>
@endsection
