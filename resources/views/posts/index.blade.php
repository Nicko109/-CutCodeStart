@extends('layout.app')
@section('title', 'Статьи')
@section('content')
    @include('partials.header')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @foreach($posts as $post)
            @include('posts.partials.item', ['post' => $post])
        @endforeach

        {{ $posts->links() }}
    </div>
@endsection






















{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
{{--        <title>Laravel c нуля</title>--}}
{{--    </head>--}}
{{--    <body class="antialiased">--}}
{{--        <h1>Laravel c нуля</h1>--}}
{{--        <script src="/js/app.js"></script>--}}
{{--    </body>--}}
{{--</html>--}}
