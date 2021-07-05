<!DOCTYPE html>
<html>
    <head>
        <title>Movies</title>
        <link rel="stylesheet" href="../css/app.css">
    </head>
    <body>
    @foreach ($archive as $element)
        <article class="offset-1">
            <h1>
                {{ $element->Name }}
            </h1>
            <div class="row">
                <div class="col-sm">
                    <img class="" src="https://image.tmdb.org/t/p/w500{{$element->Poster}}" alt="poster">
                </div>
                <div class="col-sm">
                    {{ $element->Description }}
                </div>
            </div>
        </article>
        <hr>
    @endforeach
    </body>
</html>
