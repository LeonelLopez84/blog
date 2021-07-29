<x-admin-layout>
<div class="flex py-6 px-6">
        <div class="flex-auto justify-center">
            <div class="flex justify-end">
                <div class="p-6">
                    <a class="bg-green-500 hover:bg-green-300 text-white font-bold border-gray-900 rounded py-2 px-4" href="{{route('article.create')}}">Crear <i class="fas fa-plus"></i></a>
                </div>
            </div>

            <table class="border-collapse border table-auto">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="border">Id</th>
                        <th class="border">Title</th>
                        <th class="border">Author</th>
                        <th class="border">Edit</th>
                        <th class="border">Link</th>
                        <th class="border">Created at</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-100">
                @foreach($articles as $k=>$article)
                    <tr class="{{($k%2)?'bg-gray-50':'bg-gray-100'}}">
                        <td class="p-2 border">{{$article->id}}</td>
                        <td class="p-2 border">{{$article->title}}</td>
                        <td class="p-2 border">{{$article->user->name}}</td>
                        <td class="p-2 border">
                            <a class="bg-blue-500 hover:bg-blue-300 text-white border-black rounded py-2 px-4" href="/admin/article/edit/{{$article->id}}">
                                Editar <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td class="p-2 border">
                            <a class="bg-gray-500 hover:bg-gray-200 text-white border-black rounded py-2 px-4" href="/article/{{$article->slug}}" target="_blank">
                                Ver <i class="far fa-eye"></i>
                            </a>
                        </td>
                        <td class="p-2 border">{{$article->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="px-6 py-6">
                {{$articles->links()}}
            </div>
        </div>
</div>
</x-admin-layout>
