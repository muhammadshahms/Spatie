<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <div class="mb-4 text-sm">
                        {{ Breadcrumbs::render('roles', $user) }}
                        <div class="p-2 mt-6 bg-slate-100 shadow-sm sm:rounded-lg">
                            <form id="updateForm" class="flex flex-col gap-2"
                                action="{{ route('admin.users.updateDetails', $user->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <input type="text" class="border border-gray-300 rounded-md" name="name"
                                    value="{{ $user->name }}">
                                <input type="text" class="border border-gray-300 rounded-md mt-2" name="email"
                                    value="{{ $user->email }}">
                                <button type="submit" id="updateButton"
                                    class="mt-2 px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Edit</button>
                            </form>

                        </div>
                        <div class="mt-6 p-2 bg-slate-100 shadow-sm sm:rounded-lg">
                            <h2 class="text-2xl font-semibold">Roles</h2>
                            <div class="flex space-x-2 mt-4 p-2 ">
                                @if ($user->roles)
                                    @foreach ($user->roles as $user_role)
                                        <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                            method="POST"
                                            action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">{{ $user_role->name }}</button>
                                        </form>
                                    @endforeach
                                @endif
                            </div>
                            <div class="max-w-xl mt-6 ">
                                <form method="POST" action="{{ route('admin.users.roles', $user->id) }}">
                                    @csrf
                                    <div class="sm:col-span-6">
                                        <label for="role"
                                            class="block text-sm font-medium text-gray-700">Roles</label>
                                        <select id="role" name="role" autocomplete="role-name"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('role')
                                        <span class="text-red-400 text-sm">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign</button>
                            </div>
                            </form>
                        </div>
                        <div class="mt-6 p-2 bg-slate-100 shadow-sm sm:rounded-lg">
                            <h2 class="text-2xl font-semibold">Permissions</h2>
                            <div class="flex space-x-2 mt-4 p-2">
                                @if ($user->permissions)
                                    @foreach ($user->permissions as $user_permission)
                                        <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                            method="POST"
                                            action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">{{ $user_permission->name }}</button>
                                        </form>
                                    @endforeach
                                @endif
                            </div>
                            <div class="max-w-xl mt-6">
                                <form method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
                                    @csrf
                                    <div class="sm:col-span-6">
                                        <label for="permission"
                                            class="block text-sm font-medium text-gray-700">Permission</label>
                                        <select id="permission" name="permission" autocomplete="permission-name"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->name }}">{{ $permission->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('name')
                                        <span class="text-red-400 text-sm">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
