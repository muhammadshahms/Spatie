<x-admin-layout>
  <div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-8 bg-white border-b border-gray-200">
          <div class="mb-4 text-sm">
            {{ Breadcrumbs::render('admin.permissions.create') }}
          </div>
          <div class="flex justify-between">
            <h1 class="text-2xl font-weight-400">Create Permission</h1>
          </div>
          <div class="flex flex-col">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
              <form method="POST" action="{{ route('admin.permissions.store') }}">
                @csrf
                <div class="sm:col-span-6">
                  <label for="name" class="block text-sm font-medium text-gray-700"> Post name </label>
                  <div class="mt-1">
                    <input type="text" id="name" name="name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                  </div>
                  @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="sm:col-span-6 pt-5">
                  <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Create</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>