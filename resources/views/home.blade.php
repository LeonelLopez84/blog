<x-guest-layout>
        <div class="md:container md:mx-auto p-6">
            @foreach($articles as $article)
                <div class="flex p-6">
                    <div class="flex-1">
                        <img class="inline w-auto" src="{{asset('images/'.$article->thumbnail)}}">
                    </div>
                    <div class="flex-1 p-6">
                        <p class="font-semibold">{{$article->id}} - {{$article->title}}</p>
                        <p><i>{{$article->user->name}}</i></p>
                        <p>{{$article->text}}</p>
                        <p><a href="article/{{$article->slug}}" target="_blank">VER</a></p>
                        <p>{{$article->created_at->diffForHumans()}}</p>
                    </div>
                </div>
            @endforeach
            <p>{{$articles->links()}}</p>
        </div>
</x-guest-layout>
