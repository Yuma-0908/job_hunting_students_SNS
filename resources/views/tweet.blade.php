<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>SNS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>つぶやき</h1>
        <div class='comments'>
            <div class='comment'>
            @foreach ($comments as $comment)
                <h3>{{ $comment -> title }}</h3></a>
                <p>{{ $comment -> body }}</p>
            @endforeach
            </div>
        </div>
        <div class='paginate'>
            {{ $comments->links() }}
        </div>
        <div class="back">
            [<a href="/">back</a>]
        </div>
    </body>
</html>
