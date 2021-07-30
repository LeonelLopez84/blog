<x-guest-layout>
    <div class="md:container md:mx-auto">
        <div class="justify-self-auto">
            <div class="p-6">
                <img class="inline w-auto" src="{{asset('images/'.$article->thumbnail)}}">
            </div>
            <div class="p-6">
                <p class="font-semibold">{{$article->id}} - {{$article->title}}</p>
                <p><i>{{$article->user->name}}</i></p>
                <p>{{$article->text}}</p>
                <p><a href="article/{{$article->slug}}" target="_blank">VER</a></p>
                <p>{{$article->created_at->diffForHumans()}}</p>
            </div>
        </div>
    </div>
</x-guest-layout>
