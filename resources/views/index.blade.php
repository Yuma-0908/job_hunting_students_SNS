<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>SNS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        {{Auth::user()->name}}
        <h1>企業</h1>
        <div class='companies'>
            <div class='company'>
            @foreach ($companies as $company)
            <a href='/companies/{{ $company->id }}'><h3>{{ $company->name }}</h3></a>
            <p>{{ $company->logo }}</p>
            @endforeach
            </div>
        </div>
        <div class='paginate'>
            {{ $companies->links() }}
        </div>
        <div class='comments'>
            [<a href='/comments'>つぶやき一覧</a>]
        </div>
        @endsection
    </body>
</html>
