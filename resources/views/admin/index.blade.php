<x-admin-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
                <div class="flex flex-col items-center p-6 bg-slate-200 border rounded-lg shadow-xl border-gray-200">
                    <!-- Card 1 Content -->

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-12 text-gray-700">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                    <ul class="list-disc list-inside text-sm text-gray-500 sm:text-left">
                        <span class="text-2xl font-weight-bold">USERS</span>
                        @foreach ($users as $user)
                            <li class="py-2 sm:text-left list-none">{{ $user->name }}</li>
                        @endforeach
                    </ul>


                </div>

                <div class="flex flex-col items-center p-6 bg-slate-200 border rounded-lg shadow-xl border-gray-200">
                    <!-- Card 2 Content -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>
                    <ul class="list-disc list-inside text-sm text-gray-500 sm:text-left">
                        <span class="text-2xl font-weight-bold">ROLES</span>
                        @foreach ($roles as $role)
                            <li class="py-2 sm:text-left list-none">{{ $role->name }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="flex flex-col items-center p-6 bg-slate-200 border rounded-lg shadow-xl border-gray-200">
                    <!-- Card 3 Content -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    <ul class="list-disc list-inside text-sm text-gray-500 sm:text-left">
                        <span class="text-2xl font-weight-bold">PERMISSIONS</span>
                        @foreach ($permissions as $permission)  
                            <li class="py-2 sm:text-left list-none">{{ $permission->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
