<x-app-layout>
    <div class="">
        <div class="bg-white">
            <div>
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <section aria-labelledby="filters-heading" class="pb-24 pt-4">
                        <h2 id="filters-heading" class="sr-only">Filters</h2>
                        <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                            <div>
                                <!-- Filters -->
                                <form id="filters" action="{{ route('teams.filter.index') }}">
                                    <h3 class="sr-only">Filters</h3>
                                    <div class="border-b border-gray-200 py-6">

                                        <ul role="list" class="space-y-4 text-sm font-medium text-gray-900">
                                            <li>
                                                <div class="flex flex-row items-center">
                                                    <legend class="text-sm font-semibold leading-6 text-gray-900">Advanced Filters</legend>
                                                    @svg('heroicon-o-chevron-down', 'h-4 w-4 ml-1')
                                                </div>
                                            </li>
                                            <li>
                                                <div class="relative flex gap-x-3">
                                                    <div class="flex h-6 items-center">
                                                        <input id="verified" name="verified" value="verified" type="checkbox" onclick="document.querySelector('#filters').submit();" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" {{ request()->has('verified') ? 'checked' : '' }}>
                                                    </div>
                                                    <div class="text-sm leading-6">
                                                        <label for="verified" class="font-medium text-gray-900">Verified</label>
                                                        <p class="text-gray-500">Get only verified teams</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="border-b border-gray-200 py-6">
                                        <div class="flex items-center">
                                            <label for="country" class="sr-only">Search Teams By Country</label>
                                            <div class="relative w-full">
                                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                    <svg aria-hidden="true" class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <input type="text" id="country" name="country" class="block w-full rounded-md border-gray-200 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Search Teams By Country">
                                            </div>
                                            <button type="submit" class="ml-2 rounded-lg border border-blue-700 bg-blue-700 p-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                                <span class="sr-only">Search Teams By Country</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                {{-- Name Search --}}
                                <form id="search" action="{{ route('teams.search.index') }}">
                                    <div class="border-b border-gray-200 py-6">
                                        <div class="flex items-center">
                                            <label for="search" class="sr-only">Search Teams By Name</label>
                                            <div class="relative w-full">
                                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                    <svg aria-hidden="true" class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <input type="text" id="search" name="search" class="block w-full rounded-md border-gray-200 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Search Teams By Name">
                                            </div>
                                            <button type="submit" class="ml-2 rounded-lg border border-indigo-700 bg-indigo-700 p-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                                <span class="sr-only">Search Team By Name</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            {{-- Table --}}
                            <div class="lg:col-span-3">
                                <div>
                                    <div class="flex flex-col">
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-6 align-middle sm:px-6 lg:px-8">
                                                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                                    <table class="min-w-full table-fixed divide-y divide-gray-200">
                                                        <thead class="bg-gray-50">
                                                            <tr>
                                                                <th scope="col" class="w-2/6 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                                    Name
                                                                </th>
                                                                <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                                    Country
                                                                </th>
                                                                <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                                    League
                                                                </th>
                                                                <th scope="col" class="relative w-1/6 px-6 py-3">
                                                                    <span class="sr-only">Show</span>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="divide-y divide-gray-200 bg-white">
                                                            @foreach ($teams as $team)
                                                                <tr>
                                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                                                        <div class="flex items-center">
                                                                            <div>
                                                                                <img class="h-12 w-12 rounded-full ring-2 ring-gray-200" src="{{ $team->logo ?: 'https://source.unsplash.com/gTV2osuOsJc' }}" alt="{{ $team->name }}">
                                                                            </div>
                                                                            <div class="ml-6">
                                                                                {{ $team->name }}
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                                                        <div class="flex items-center">
                                                                            @if ($team->country)
                                                                                <x-dynamic-component component="flag-country-{{ $team->country }}" class="h-8 w-8" />
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                                                        <div class="flex items-center">
                                                                            {{ $team?->league?->name }}
                                                                        </div>
                                                                    </td>
                                                                    <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                                                                        <a href="{{ route('team.show', ['team' => $team]) }}" class="text-green-600 hover:text-green-900">Show</a>
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
                    </section>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
