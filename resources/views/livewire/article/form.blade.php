<div id="form-component">
    <form action="{{route('article.store')}}" method="POST" wire:submit.prevent="save" class="w-full max-w-lg" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full py-3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Título
                </label>
                <input wire:model="title" name="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Titulo del Articulo">
            </div>
            <div class="w-full py-3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Texto del Artículo
                </label>
                <textarea wire:model="text" name="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Texto"></textarea>
            </div>
            <div class="w-full py-3 px-3 mb-6 md:mb-0">
                <label class="w-full flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-purple-600 hover:text-white text-purple-600 ease-linear transition-all duration-150">
                    @if ($photo)
                        <img src="{{ $photo->temporaryUrl() }}">
                    @else
                    <i class="fas fa-cloud-upload-alt fa-3x"></i>
                    <span class="mt-2 text-base leading-normal">Select a Thumbnail</span>
                    @endif
                    <input type='file' name="thumbnail" wire:model="photo" class="hidden" />
                </label>
            </div>
            <div class="w-full py-3 px-3 mb-6 md:mb-0">
                <label class="py-6 px-6" for="">
                    @if (!$photo)
                        <img src="{{asset('images/'.$thumbnail)}}" alt="">
                    @endif
                </label>
            </div>

            <div class="w-full py-3 px-3 mb-6 md:mb-0 text-right">
                @error('photo') <span class="error">{{ $message }}</span> @enderror

                <input class="cursor-pointer py-2 px-4 bg-green-500 hover:bg-green-300 text-white rounded"  type="submit" name="Submit" value="Guardar" >
            </div>
        </div>
    </form>
</div>


