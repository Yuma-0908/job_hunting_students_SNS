<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>SNS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>企業</h1>
        <div class='companies'>
            <div class='company'>
            @foreach ($companies as $company)
            <p>{{ $company -> id }}</p>
            <h3>{{ $company -> name }}</h3>
            <p>{{ $company -> logo }}</p>
            <p>{{ $company -> addres }}</p>
            <p>{{ $company -> potision }}</p>
            <p>{{ $company -> president }}</p>
            <p>{{ $company -> capital }}</p>
            <p>{{ $company -> employees }}</p>
            @endforeach
            </div>
        </div>
    </body>
</html>