<x-admin-layout>
<div class="flex py-6 px-6">
        <div class="flex-auto justify-center">
            <div class="flex justify-end">
                <div class="p-6">
                    <p>
                        <a class="bg-green-500 hover:bg-green-300 text-white font-bold border-gray-900 rounded py-2 px-4" href="{{route('article.create')}}">Crear</a>
                    </p>
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
                                <svg style="display:inline" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                        </td>
                        <td class="p-2 border">
                            <a class="bg-gray-500 hover:bg-gray-200 text-white border-black rounded py-2 px-4" href="/article/{{$article->slug}}" target="_blank">
                                <svg style="display:inline" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                        </td>
                        <td class="p-2 border">{{$article->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$articles->links()}}
        </div>
</div>
</x-admin-layout>
