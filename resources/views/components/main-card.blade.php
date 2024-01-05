@props(['breadcrumbs'])
<div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-8 bg-white border-b border-gray-200">
                <div class="mb-4 text-sm">
                    {{ $breadcrumbs }}
                    <div class="flex items-center justify-between p-2">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
