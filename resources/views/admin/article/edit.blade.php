<x-admin-layout xmlns:livewire="http://www.w3.org/1999/html">
    <div class="md:container md:mx-auto">
        <div class="justify-self-auto">
            <h1 class="p-3 font-bold">Editar Articulo</h1>
            <h2>{{$article->title}}</h2>
            <livewire:article.form :article="$article" />
         </div>
    </div>
</x-admin-layout>
