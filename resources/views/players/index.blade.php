<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <form action="{{ route('players.search.index') }}">
                <div class="flex items-center">
                    <label for="search" class="sr-only">Search Players</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="search" name="search" class="block w-full rounded-md pl-10 border-gray-200 shadow focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Search Players">
                    </div>
                    <button type="submit" class="p-2 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Search Players By Name</span>
                    </button>
                </div>

                <div class="bg-white shadow sm:rounded-lg p-4 mt-4 space-y-8">
                    <fieldset>
                        <div class="flex items-center flex-row">
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Advanced Filters</legend>
                            @svg('heroicon-o-chevron-down', 'h-4 w-4 ml-1')
                        </div>
                      <div class="sm:grid sm:grid-cols-2 mt-4">
                        <div class="space-y-4 col-span-1">
                            <div class="relative flex gap-x-3">
                              <div class="flex h-6 items-center">
                                <input id="verified" name="verified" value="verified" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" {{ request()->has('verified' ) ? 'checked' : '' }}>
                              </div>
                              <div class="text-sm leading-6">
                                <label for="verified" class="font-medium text-gray-900">Verified</label>
                                <p class="text-gray-500">Get only players with public verified results</p>
                              </div>
                            </div>
                            {{-- <div class="relative flex gap-x-3">
                              <div class="flex h-6 items-center">
                                <input id="candidates" name="candidates" value="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                              </div>
                              <div class="text-sm leading-6">
                                <label for="candidates" class="font-medium text-gray-900">Team</label>
                                <p class="text-gray-500">Get only players assigned to a team.</p>
                              </div>
                            </div> --}}
                        </div>
                        {{-- <div class="mt-4 sm:mt-0 space-y-4 col-span-1">
                            <div class="relative flex gap-x-3">
                                <div class="flex flex-row">
                                    <label for="height" class="block text-sm font-medium leading-6 text-gray-900">Height</label>
                                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">From</label>
                                    <div class="mt-2">
                                        <input id="height" type="number" name="height" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    </div>
                                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">To</label>
                                    <div class="mt-2">
                                      <input id="height" type="number" name="height" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    </div>
                                  </div>
                            </div>
                        </div> --}}
                      </div>
                    </fieldset>
                </div>
            </form>

            <div>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-6 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="table-fixed min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="w-2/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Team
                                            </th>
                                            <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Position
                                            </th>
                                            <th scope="col" class="relative w-1/6 px-6 py-3">
                                                <span class="sr-only">Show</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($players as $player)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <div class="flex items-center">
                                                        {{ $player->name }}
                                                        @if (auth()->user()->type == 'admin')
                                                            <a class="text-xs text-indigo-600 ml-1" href="{{ route('impersonation.create', ['userId' => $player->id]) }}">Impersonate</a>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <div class="flex items-center">
                                                        {{ $player->currentTeam?->name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $player->position }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="{{ route('player.show', ['player' => $player]) }}" class="text-green-600 hover:text-green-900">Show</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2 sm:mx-0">
                        {{ $players->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
