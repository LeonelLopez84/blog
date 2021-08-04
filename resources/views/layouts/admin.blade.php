<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Admin Blog') }} </title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        @livewireStyles
    </head>
    <body class="bg-gray-100 font-sans leading-normal tracking-normal">
        <div class="flex md:flex-row-reverse flex-wrap">

            <!--Main Content-->
            <div class="w-full md:w-4/5 bg-gray-100">
                <div class="container bg-gray-100 py-6 px-6">

                    {{$slot}}
                </div>
            </div>
            @include('admin.partials.sidebar')


            <script src="{{ mix('js/app.js') }}" defer></script>
            @livewireScripts
        </div>
    </body>
</html>
