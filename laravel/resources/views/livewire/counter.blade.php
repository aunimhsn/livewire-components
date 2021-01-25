<div class="flex items-center justify-center h-screen">
    <div class="flex-1 max-w-lg p-8 mx-2 bg-white rounded-sm shadow-md">
        <h1 class="text-4xl font-extrabold text-right text-gray-900 font-montserrat">Counter</h1>
        <h2 class="text-sm font-bold text-right text-gray-400 uppercase font-montserrat">Livewire component</h2>

        <p class="py-10 text-5xl font-extrabold text-center text-gray-900 font-montserrat">{{ $count }}</p>

        <div class="flex justify-evenly">
            <button wire:click="decrement" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 text-red-600 fill-current hover:text-red-900">
                    <!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z"/>
                </svg>
            </button>
            <button wire:click="increment" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 text-green-600 fill-current hover:text-green-900">
                    <!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"/>
                </svg>
            </button>
        </div>
    </div>
</div>
