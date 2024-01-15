<!-- ... your other HTML content ... -->

<!-- ... your other HTML content ... -->

<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <div class="mb-4 text-sm">
                        {{ Breadcrumbs::render('users') }}
                    </div>
                    <div class="flex justify-between">

                        <h1 class="text-2xl font-weight-400">Users</h1>
                        <a href="{{ route('admin.users.create') }}"
                            class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md text-slate-100 self-end">
                            create
                        </a>
                    </div>
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Roles</th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $user->name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $user->email }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                                            {{ implode(' ', $user->roles->pluck('name')->toArray()) }}
                                                        </div>
                                                </td>
                                                <td>
                                                    <div class="flex justify-end">
                                                        <div class="flex space-x-2">
                                                            <x-modal>
                                                                <div>
                                                                    <div>
                                                                        <label for="">name: </label>
                                                                        <input type="text"
                                                                            value="{{ $user->name }}" readonly>

                                                                    </div>
                                                                    <div>
                                                                        <label for="">email: </label>
                                                                        <input type="text"
                                                                            value="{{ $user->email }}" readonly>
                                                                    </div>
                                                                    <div>
                                                                        <label for="">roles: </label>
                                                                        <input type="text"
                                                                            value="{{ $user->roles->pluck('name')->implode(' ') }}"
                                                                            readonly>

                                                                    </div>
                                                                </div>
                                                            </x-modal>

                                                            <a href="{{ route('admin.users.show', $user->id) }}"
                                                                class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>

                                                            <form
                                                                class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                                method="POST"
                                                                action="{{ route('admin.users.destroy', $user->id) }}"
                                                                onsubmit="return confirm('Are you sure?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit">Delete</button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
