<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
    <livewire:counter title="'Lord of the rings'" />
        <div class="md:container md:mx-auto">
                @foreach($articles as $article)
                    <div class="flex">
                        <div><img class="inline" src="{{$article->img}}"> </div>
                        <div>
                            <p class="font-semibold">{{$article->id}} - {{$article->title}}</p>
                            <p><i>{{$article->user->name}}</i></p>
                            <p>{{$article->text}}</p>
                            <p>{{$article->created_at}}</p>
                        </div>
                    </div>
                @endforeach
                    {{$articles->links()}}
            </div>
        @livewireScripts
    </body>
</html>
