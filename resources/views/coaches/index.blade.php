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
                                <form id="filters" action="{{ route('filter.index') }}">
                                    <input name="_type" type="hidden" value="coach">
                                    <input name="_model" type="hidden" value="coaches">

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
                                                        <p class="text-gray-500">Get only coaches with public previous hirings</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- Positions --}}
                                    <div class="border-b border-gray-200 py-6">
                                        <h3>
                                            <div class="text-sm font-medium text-gray-900">Role(s)</div>
                                        </h3>
                                        <div class="pt-4">
                                            <div class="space-y-4">
                                                <div class="flex items-center">
                                                    <input @if (request('role') && in_array('head-coach', request('role'))) checked @endif id="head-coach" name="role[]" onclick="document.querySelector('#filters').submit();" value="head-coach" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="head-coach" class="ml-3 text-sm text-gray-600">Head coach</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input @if (request('role') && in_array('assistan-coach', request('role'))) checked @endif id="assistan-coach" name="role[]" onclick="document.querySelector('#filters').submit();" value="assistan-coach" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="assistan-coach" class="ml-3 text-sm text-gray-600">Assistant Coach</label>
                                                </div>
                                                {{-- <div class="flex items-center">
                                                    <input @if (request('role') && in_array('small-forward', request('role'))) checked @endif id="small-forward" name="role[]" onclick="document.querySelector('#filters').submit();" value="small-forward" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="small-forward" class="ml-3 text-sm text-gray-600">Small Forward</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input @if (request('role') && in_array('point-guard', request('role'))) checked @endif id="point-guard" name="role[]" onclick="document.querySelector('#filters').submit();" value="point-guard" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="point-guard" class="ml-3 text-sm text-gray-600">Point Guard</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input @if (request('role') && in_array('shooting-guard', request('role'))) checked @endif id="shooting-guard" name="role[]" onclick="document.querySelector('#filters').submit();" value="shooting-guard" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="shooting-guard" class="ml-3 text-sm text-gray-600">Shooting Guard</label>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Age --}}
                                    <div class="border-b border-gray-200 py-6">
                                        <h3>
                                            <div class="text-sm font-medium text-gray-900">Age (From/To)</div>
                                        </h3>
                                        <div class="pt-4">
                                            <div class="space-y-4">
                                                <div class="flex items-center space-x-4">
                                                    <select id="age-from" name="age-from" class="block w-full rounded-md border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        <option {{ request('age-from') ? '' : 'selected' }} disabled></option>
                                                        @for ($i = 13; $i < 46; $i++)
                                                            <option {{ request('age-from') == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                    <select id="age-to" name="age-to" onchange="document.querySelector('#filters').submit();" class="block w-full rounded-md border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        <option selected disabled></option>
                                                        @for ($i = 13; $i < 46; $i++)
                                                            <option {{ request('age-to') == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Salary --}}
                                    {{-- <div class="border-b border-gray-200 py-6">
                                    <h3>
                                        <div class="text-sm font-medium text-gray-900">Maximum Salary</div>
                                    </h3>
                                    <div class="pt-4">
                                        <div class="flex items-center">
                                            <div class="relative w-full">
                                                <input type="text" name="salary" id="salary" class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Max">
                                                <div class="absolute inset-y-0 right-0 flex items-center">
                                                    <label for="currency" class="sr-only">Currency</label>
                                                    <select id="currency" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm">
                                                        <option value="$">USD</option>
                                                        <option value="€">EUR</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                </form>

                                {{-- Name Search --}}
                                <form id="search" action="{{ route('search.index') }}">
                                    <input name="_type" type="hidden" value="coach">
                                    <input name="_model" type="hidden" value="coaches">
                                    <div class="border-b border-gray-200 py-6">
                                        <div class="flex items-center">
                                            <label for="search" class="sr-only">Search Coaches By Name</label>
                                            <div class="relative w-full">
                                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                    <svg aria-hidden="true" class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <input type="text" id="search" name="search" class="block w-full rounded-md border-gray-200 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Search Coaches By Name">
                                            </div>
                                            <button type="submit" class="ml-2 rounded-lg border border-blue-700 bg-blue-700 p-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                                <span class="sr-only">Search Coaches By Name</span>
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
                                                                    Verified
                                                                </th>
                                                                <th scope="col" class="relative w-1/6 px-6 py-3">
                                                                    <span class="sr-only">Show</span>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="divide-y divide-gray-200 bg-white">
                                                            @foreach ($coaches as $coach)
                                                                <tr>
                                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                                                        <div class="flex items-center">
                                                                            {{ $coach->name }}
                                                                            @if (auth()->user()->type == 'admin')
                                                                                <a class="ml-1 text-xs text-indigo-600" href="{{ route('impersonation.create', ['userId' => $coach->id]) }}">Impersonate</a>
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                                                        @if ($coach->verified)
                                                                            @svg('heroicon-o-check', 'text-green-500 h-4 w-4')
                                                                        @endif
                                                                    </td>
                                                                    <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                                                                        <a href="{{ route('coach.show', ['coach' => $coach]) }}" class="text-green-600 hover:text-green-900">Show</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-2 sm:mx-0">
                                            {{ $coaches->links() }}
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
