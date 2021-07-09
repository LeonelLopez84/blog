<x-admin-layout xmlns:livewire="http://www.w3.org/1999/html">
    <div class="flex justify-center">
        <div>
            <h1 class="p-6">Editar Articulo</h1>
            <h2>{{$article->title}}</h2>
            <livewire:article.form :article="$article" />
        </div>
    </div>
</x-admin-layout>
