
    <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Titulo
                </label>
                <input wire:model="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Titulo del Articulo">
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Texto del Articulo
                </label>
                <textarea wire:model="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Texto"></textarea>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label
                    class="w-64 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-purple-600 hover:text-white text-purple-600 ease-linear transition-all duration-150">
                    <i class="fas fa-cloud-upload-alt fa-3x"></i>
                    <span class="mt-2 text-base leading-normal">Select a Thumbnail</span>
                    <input type='file' class="hidden" />
                </label>
                <label for=""><img wire:model="thumbnail" src="{{asset('images/'.$thumbnail)}}" alt=""></label>
            </div>

        </div>
    </form>

