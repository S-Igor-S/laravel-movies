<x-layout>
    @foreach ($movies as $movie)
        <article class="offset-1">
            <h1>
                {{ $movie->Name }}
            </h1>
            <div class="row">
                <div class="col-sm">
                    <img class="" src="{{ $movie->PosterPath }}" alt="poster">
                </div>
                <div class="col-sm">
                    {{ $movie->Description }}
                </div>
            </div>
        </article>
        <hr>
    @endforeach
</x-layout>
