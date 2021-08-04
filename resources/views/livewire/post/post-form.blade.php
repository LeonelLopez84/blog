<div class="md:container mx-auto container">
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded p-6" wire:submit.prevent="save">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Title:
                </label>
                <input type="text" wire:model="post.title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Content:
                </label>
                <textarea  wire:model="post.content" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" >
                    Hello World!
                </textarea>
                <!--<p class="text-red-500 text-xs italic">Please choose a password.</p>-->
            </div>
            <div class="flex  ">
                <button class="place-items-end bg-green-500 hover:bg-green-300 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
