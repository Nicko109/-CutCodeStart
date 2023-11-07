@extends('layout.admin')
@section('title', isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью' }}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" action="{{ isset($post) ? route('admin.posts.update', $post->id) : route('admin.posts.store')}}" method="POST">
                @csrf
                @if(isset($post))
                    @method('PUT')
                @endif

                <input name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-500 @enderror" placeholder="Название" value="{{ isset($post) ? $post->title : '' }}" />
                @error('title')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <input name="preview"  type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('preview') border-red-500 @enderror" placeholder="Краткое описание" value="{{ isset($post) ? $post->preview : '' }}" />
                @error('preview')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="description"  type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('description') border-red-500 @enderror" placeholder="Полное описание" value="{{ isset($post) ? $post->description : '' }}" />
                @error('description')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                @if(isset($post) && $post->thumbnail)
                <div>
                    <img class="h-64 w-64" src="{{ $post->thumbnail }}">
                </div>
                @endif

                <input name="thumbnail" type="file" class="w-full h-12 @error('thumbnail') border-red-500 @enderror" placeholder="Обложка" />
                @error('thumbnail')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
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
