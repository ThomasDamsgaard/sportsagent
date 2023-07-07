<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-12">
            <div>
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="flex items-center px-4 py-5 sm:px-6">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Profile Information</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">Update your account's profile information.</p>
                        </div>
                    </div>
                    <div class="border-t border-gray-200">
                        <form action="{{ route('player.profile.update', ['player' => $player]) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <dl>
                                @if (!auth()->user()->sport_id)
                                    <div class="bg-red-500 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="flex items-center text-sm font-medium text-white">Sport - must be filled.</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            <x-jet-select id="sport_id" class="block w-full" type="text" name="sport_id" required>
                                                <option disabled selected></option>
                                                <option value="1">Soccer</option>
                                                <option value="2">Basketball</option>
                                            </x-jet-select>
                                        </dd>
                                    </div>
                                @endif

                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Birthday (yyyy/mm/dd)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <input datepicker datepicker-format="yyyy/mm/dd" data-date="1995/02/25" type="text" name="age" id="age" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="1995/02/25" value="{{ $player->age }}">
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Height (cm)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <input type="text" name="height" id="height" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="195" value="{{ $player->height }}">
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Weight (kg)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <input type="text" name="weight" id="weight" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="90" value="{{ $player->weight }}">
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Prefered Position(s)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">

<ul class="grid w-full gap-6 md:grid-cols-3">
    <li>
        <input type="checkbox" id="react-option" value="" class="hidden peer" required="">
        <label for="react-option" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
            <div class="block">
                <svg class="mb-2 w-7 h-7 text-sky-500" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-23.9 5.8-35.3 1.3-15.9-9.2-22.5-44.5-13.5-92 1.1-5.6 2.3-11.2 3.7-16.7 22.4 4.8 45 8.1 67.9 9.8 13.2 18.7 27.7 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6.4 19.5.6 29.5.6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8.9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z"/></svg>
                <div class="w-full text-lg font-semibold">React Js</div>
                <div class="w-full text-sm">A JavaScript library for building user interfaces.</div>
            </div>
            </label>
    </li>
    <li>
        <input type="checkbox" id="flowbite-option" value="" class="hidden peer">
        <label for="flowbite-option" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="block">
                <svg class="mb-2 text-green-400 w-7 h-7" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M356.9 64.3H280l-56 88.6-48-88.6H0L224 448 448 64.3h-91.1zm-301.2 32h53.8L224 294.5 338.4 96.3h53.8L224 384.5 55.7 96.3z"/></svg>
                <div class="w-full text-lg font-semibold">Vue Js</div>
                <div class="w-full text-sm">Vue.js is an model–view front end JavaScript framework.</div>
            </div>
        </label>
    </li>
    <li>
        <input type="checkbox" id="angular-option" value="" class="hidden peer">
        <label for="angular-option" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="block">
                <svg class="mb-2 text-red-600 w-7 h-7" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M185.7 268.1h76.2l-38.1-91.6-38.1 91.6zM223.8 32L16 106.4l31.8 275.7 176 97.9 176-97.9 31.8-275.7zM354 373.8h-48.6l-26.2-65.4H168.6l-26.2 65.4H93.7L223.8 81.5z"/></svg>
                <div class="w-full text-lg font-semibold">Angular</div>
                <div class="w-full text-sm">A TypeScript-based web application framework.</div>
            </div>
        </label>
    </li>
</ul>

                                        {{-- <input type="text" name="position" id="position" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $player->position }}"> --}}
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Salary Expectation (Year)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <div class="flex">
                                            <div class="relative rounded-md shadow-sm">
                                                <input type="text" name="salary" id="salary" class="block w-full rounded-md border-0 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="At Least" value="{{ \Illuminate\Support\Str::substr($player->salary, 1) }}">
                                                <div class="absolute inset-y-0 right-0 flex items-center">
                                                    <label for="currency" class="sr-only">Currency</label>
                                                    <select id="currency" name="currency" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm">
                                                        <option value="$">USD</option>
                                                        <option value="€">EUR</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">City (Current Residency)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <input type="text" name="city" id="city" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Los Angeles" value="{{ $player->city }}">
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Country (Current Residency)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <input type="text" name="country" id="country" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="United States" value="{{ $player->country }}">
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        <textarea id="biography" name="biography" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Tell The Clubs About Yourself">{{ $player->biography }}</textarea>
                                    </dd>
                                </div>

                                {{-- <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Motivation</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        <fieldset>
                                            <div class="mt-4 space-y-4">
                                                @for ($i = 0; $i < 3; $i++)
                                                    <div class="flex items-start">
                                                        <div class="flex h-5 items-center">
                                                            <input id="option{{ $i }}" name="option{{ $i }}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                        </div>
                                                        <div class="ml-3 text-sm">
                                                            <label for="option{{ $i }}" class="font-medium text-gray-700">Option {{ $i }}</label>
                                                            <p class="text-gray-500">Option text {{ $i }}</p>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </fieldset>
                                    </dd>
                                </div> --}}
                            </dl>
                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                <x-jet-button type="submit">Save</x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div>
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="flex items-center px-4 py-5 sm:px-6">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Attachments</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">Upload your resumé, stats, newspaper articles, etc.</p>
                        </div>
                    </div>
                    <div class="border-t border-gray-200">
                        <form action="{{ route('player.attachments.store', ['player' => $player]) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <dl>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Current Attachments</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        <ul role="list" class="bg-white divide-y divide-gray-200 rounded-md border border-gray-200">

                                            @forelse ($player->getMedia('attachments') as $item)
                                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                    <div class="flex w-0 flex-1 items-center">
                                                        @switch($item)
                                                            @case($item->mime_type == 'application/pdf')
                                                                @svg('heroicon-m-paper-clip', 'h-5 w-5 flex-shrink-0 text-gray-400')
                                                            @break

                                                            @case($item->mime_type == 'image/png' || $item->mime_type == 'image/jpeg')
                                                                @svg('heroicon-s-camera', 'h-5 w-5 flex-shrink-0 text-gray-400')
                                                            @break

                                                            @case($item->mime_type == 'video/quicktime' || $item->mime_type == 'video/quicktime')
                                                                @svg('heroicon-m-video-camera', 'h-5 w-5 flex-shrink-0 text-gray-400')
                                                            @break
                                                        @endswitch
                                                        <span class="ml-2 w-0 flex-1 truncate">{{ $item->file_name }}</span>
                                                    </div>
                                                    <div class="ml-4 flex-shrink-0">
                                                        <a href="{{ route('player.attachments.show', ['item' => $item]) }}" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                                    </div>
                                                    <div class="ml-4 flex-shrink-0">
                                                        @livewire('delete-attachment', ['item' => $item], key($item->id))
                                                    </div>
                                                </li>
                                                @empty
                                                    <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                        <div class="flex w-0 flex-1 items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                            </svg>

                                                            <span class="ml-2 w-0 flex-1 truncate">No attachments uploaded yet.</span>
                                                        </div>
                                                    </li>
                                                @endforelse
                                            </ul>
                                        </dd>
                                    </div>

                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Upload Attachment</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto h-8 w-8 text-gray-300">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                                            </svg>
                                            <input id="fileupload" name="fileupload" type="file" class="mt-1">
                                            <label for="fileupload_name" class="block text-sm font-medium leading-6 text-gray-900 mt-1">Attachment Name</label>
                                            <input type="text" name="fileupload_name" id="fileupload_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                        </dd>
                                    </div>
                                </dl>
                                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                    <x-jet-button type="submit">Submit</x-jet-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @push('styles')
            <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" />
            <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
            <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
            <style>
                .filepond--root {
                    font-family: Nunito, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                    /* max-height: 10rem; */
                    font-size: 0.875rem;
                }

                /* the text color of the drop label*/
                .filepond--drop-label {
                    color: rgb(75 85 99);
                    line-height: 1.25rem;
                }

                /* underline color for "Browse" button */
                .filepond--label-action {
                    --tw-text-opacity: 1;
                    color: rgb(79 70 229 / var(--tw-text-opacity));
                    text-decoration-color: transparent;
                    font-weight: 500;
                }

                /* the background color of the filepond drop area */
                .filepond--panel-root {
                    background-color: #eee;
                }

                /* the border radius of the drop area */
                .filepond--panel-root {
                    border-radius: 0.5em;
                }

                /* the border radius of the file item */
                .filepond--item-panel {
                    border-radius: 0.5em;
                }

                /* the background color of the file and file panel (used when dropping an image) */
                .filepond--item-panel {
                    background-color: #555;
                }

                /* the background color of the drop circle */
                .filepond--drip-blob {
                    background-color: #999;
                }

                /* the background color of the black action buttons */
                .filepond--file-action-button {
                    background-color: rgba(0, 0, 0, 0.5);
                }

                /* the icon color of the black action buttons */
                .filepond--file-action-button {
                    color: white;
                }

                /* the color of the focus ring */
                .filepond--file-action-button:hover,
                .filepond--file-action-button:focus {
                    box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.9);
                }

                /* the text color of the file status and info labels */
                .filepond--file {
                    color: white;
                }

                /* error state color */
                [data-filepond-item-state*='error'] .filepond--item-panel,
                [data-filepond-item-state*='invalid'] .filepond--item-panel {
                    background-color: red;
                }

                [data-filepond-item-state='processing-complete'] .filepond--item-panel {
                    background-color: green;
                }

                /* bordered drop area */
                .filepond--panel-root {
                    background-color: transparent;
                    border-radius: 0.375rem;
                    border: 2px;
                    border-style: dashed;
                    --tw-border-opacity: 1;
                    border-color: rgb(209 213 219 / var(--tw-border-opacity));
                }

                .filepond--credits {
                    display: none;
                }
            </style>
        @endpush

        @push('scripts')
            <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
            <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
            <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
            {{-- <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script> --}}
            <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
            <script>
                FilePond.registerPlugin(FilePondPluginImagePreview);
                FilePond.registerPlugin(FilePondPluginFileValidateType);
                FilePond.registerPlugin(FilePondPluginImageTransform);
                // FilePond.registerPlugin(FilePondPluginImageResize);
                // Init FilePond
                // Get a reference to the file input element
                const inputElement = document.querySelector('#fileupload');

                // Create a FilePond instance
                const pond = FilePond.create(inputElement, {
                    imageResizeTargetWidth: 800,
                    imageResizeMode: 'contain',
                    imageResizeUpscale: false,
                    acceptedFileTypes: [
                        'application/pdf', 'image/png', 'image/jpeg', 'video/mpeg', 'video/quicktime'
                    ],
                    server: {
                        url: '/upload',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    }
                });
            </script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
        @endpush
    </x-app-layout>
