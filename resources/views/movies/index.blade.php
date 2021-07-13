@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            {!! $movies->links() !!}
        </div>
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
        <div class="d-flex justify-content-center">
            {!! $movies->links() !!}
        </div>
    </div>
@endsection
