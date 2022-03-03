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
        <div class='company'>
            <h3>{{ $company->name }}</h3>
            <p>{{ $company->logo }}</p>
            <p>{{ $company->address }}</p>
            <p>{{ $company->potision }}</p>
            <p>{{ $company->president }}</p>
            <p>{{ $company->capital }}</p>
            <p>{{ $company->employees }}</p>
        </div>
        <div class='create'>
            [<a href='/companies/{{ $company->id }}/create'>つぶやき</a>]
        </div>
        <div class="back">
            [<a href="/">back</a>]
        </div>
        @endsection
    </body>
</html>
