<x-app-layout>
    <livewire:order-wizard />
    {{-- <livewire:stepper-step /> --}}
    {{-- @livewire('stepper') --}}
    {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div>
                <ol class="flex items-center w-full px-4 sm:px-0 text-sm font-medium text-center text-gray-500 sm:text-base">
                    <li class="flex md:w-full items-center text-blue-600 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                            <svg aria-hidden="true" class="w-4 h-4 mr-2 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Personal <span class="hidden sm:inline-flex sm:ml-1">Info</span>
                        </span>
                    </li>
                    <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                            <span class="mr-2">2</span>
                            Account <span class="hidden sm:inline-flex sm:ml-1">Info</span>
                        </span>
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">3</span>
                        Confirmation
                    </li>
                </ol>

                <div class="py-12">
                    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-12">
                        <div>
                            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                <div class="flex items-center px-4 py-5 sm:px-6">
                                    <div>
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Set your account's profile information.</p>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200"> --}}
    {{-- <form action="{{ route('player.profile.update', ['player' => $player]) }}" method="POST" enctype="multipart/form-data"> --}}
    {{-- @method('PATCH')
                                    @csrf

                                    <dl>
                                        @if (!auth()->user()->sport_id)
                                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="flex items-center text-sm font-medium text-gray-500">Sport</dt>
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
                                            <dt class="flex items-center text-sm font-medium text-gray-500">Birthday</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                <input datepicker datepicker-format="yyyy/mm/dd" type="text" name="age" id="age" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                            </dd>
                                        </div>
                                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="flex items-center text-sm font-medium text-gray-500">Prefered position</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                <input type="text" name="position" id="position" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                            </dd>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="flex items-center text-sm font-medium text-gray-500">Salary expectation</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                <input type="text" name="salary" id="salary" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                            </dd>
                                        </div>
                                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                <textarea id="biography" name="biography" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required></textarea>
                                            </dd>
                                        </div>

                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
                                        </div>
                                    </dl>
                                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                        <x-jet-button type="submit">Submit</x-jet-button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}

    {{-- <div>
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
                            </div> --}}

    {{-- </div>
                </div>

            </div>
        </div>
    </div> --}}

    {{-- <livewire:stepper /> --}}
</x-app-layout>
