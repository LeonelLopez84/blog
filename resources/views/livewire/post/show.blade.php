<div>
    <div class="md:container md:mx-auto">
        <div class="flex justify-self-auto">
            <div class="p-6">
                <img class="inline w-auto" src="{{asset('images/'.$post->thumbnail)}}">
            </div>
            <div class="p-6">
                <p class="p-3 text-xl font-bold">{{$post->id}} - {{$post->title}}</p>
                <p class="p-3 text-lg"><i>{{$post->user->name}}</i></p>
                <p class="p-6">{{$post->text}}</p>
                <p class="p-6">{{$post->created_at->diffForHumans()}}</p>
            </div>
        </div>
    </div>
</div>
