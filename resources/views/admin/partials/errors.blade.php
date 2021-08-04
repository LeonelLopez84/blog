@if(count($errors) > 0)
    <div class="justify-start">
        <ul class="bg-red-700 italic text-white p-2 list-inside m-2 rounded">
            @foreach($errors->all() as $error)
                <li class="p-2">{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
