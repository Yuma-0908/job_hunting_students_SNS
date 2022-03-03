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
        <h2>つぶやき</h2>
        <form action='/comments/{{ $company->id }}' method='POST'>
            {{ csrf_field() }}
            <input type="hidden" name="comment[company_id]" value="{{ $company->id }}">
            <div class='title'>
                <h3>タイトル</h3>
                <input type="text" name="comment[title]" placeholder="タイトル"/>
            </div>
            <div class='body'>
                <h3>つぶやき</h3>
                <textarea name="comment[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="つぶやく"/>
        </form>
        <div class="back">
            [<a href="/">back</a>]
        </div>
        @endsection
    </body>
</html>
