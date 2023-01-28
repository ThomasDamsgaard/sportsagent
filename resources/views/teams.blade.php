<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="flex items-center mb-12">
                <label for="simple-search" class="sr-only">Search Teams</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="simple-search" class="block w-full rounded-md pl-10 border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Search Teams" required>
                </div>
                <button type="submit" class="p-2 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search Teams</span>
                </button>
            </div>

            @foreach ($teams as $team)
                <div class="mb-12">
                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                        <div class="flex justify-between items-center px-4 py-5 sm:px-6">
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $team->name }}</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Team Information</p>
                            </div>
                            <div>
                                <img class="h-12 w-12 rounded-full ring-2 ring-gray-200" src="https://source.unsplash.com/gTV2osuOsJc" alt="">
                            </div>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Head Coach</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Test Coach</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Email address</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">testcoach@example.com</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Roster</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        <div>
                                            <div id="table" class="flex flex-col">
                                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                    <div class="py-6 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                            <table class="table-fixed min-w-full divide-y divide-gray-200">
                                                                <thead class="bg-gray-50">
                                                                    <tr>
                                                                        <th scope="col" class="w-1/2 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                            Name
                                                                        </th>
                                                                        <th scope="col" class="w-1/2 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                            Position
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="bg-white divide-y divide-gray-200">
                                                                    {{-- @foreach ($players as $player) --}}
                                                                    <tr>
                                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                                            {{-- {{ $player->coach }} --}}
                                                                        </td>
                                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                                            {{-- {{ $player->position }} --}}
                                                                        </td>
                                                                    </tr>
                                                                    {{-- @endforeach --}}
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
