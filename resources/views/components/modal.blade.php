<!-- resources/views/components/modal.blade.php -->

<div x-data="{ open: false }">
    <a @click="open = true" href="#">
        click
    </a>

    <div x-show="open" @click.away="open = false" class="fixed inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="open" class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                <div
                    class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full mx-auto">
                    <button @click="open = false" class="p-2 text-gray-500 cursor-pointer focus:outline-none ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <div class="flex items-center p-2">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
