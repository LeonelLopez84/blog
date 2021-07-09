<x-admin-layout>
<div class="flex justify-center">
        <div></div>
        <div>
            <div class="flex justify-end ...">
                <div class="p-6"><p><a href="{{route('article.create')}}">Crear</a></p></div>
            </div>

            <table class="table-auto">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Edit</th>
                    <th>Link</th>
                    <th>Created at</th>
                </tr>
                @foreach($articles as $article)
                    <tr>
                        <td class="p-2">{{$article->id}}</td>
                        <td class="p-2">{{$article->title}}</td>
                        <td class="p-2">{{$article->user->name}}</td>
                        <td class="p-2"><a href="/admin/article/edit/{{$article->id}}">EDITAR</a></td>
                        <td class="p-2"><a href="/article/{{$article->slug}}" target="_blank">VER</a></td>
                        <td class="p-2">{{$article->created_at}}</td>
                    </tr>
                @endforeach
            </table>
            {{$articles->links()}}
        </div>
        <div></div>
</div>
</x-admin-layout>
