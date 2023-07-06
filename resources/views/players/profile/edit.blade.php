<x-app-layout>
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
                                        <input datepicker datepicker-format="yyyy/mm/dd" type="text" name="age" id="age" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $player->age }}">
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Height (cm)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <input type="text" name="height" id="height" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $player->height }}">
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Weight (kg)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <input type="text" name="weight" id="weight" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $player->weight }}">
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Prefered Position(s)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <input type="text" name="position" id="position" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $player->position }}">
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Salary Expectation (Year)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <div>
                                            <div class="relative rounded-md shadow-sm">
                                                <input type="text" name="salary" id="salary" class="block w-full rounded-md border-0 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" value="{{ \Illuminate\Support\Str::substr($player->salary, 1) }}">
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
                                    <dt class="flex items-center text-sm font-medium text-gray-500">City (Current Resident)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <input type="text" name="city" id="city" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $player->city }}">
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="flex items-center text-sm font-medium text-gray-500">Country (Current Resident)</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                        <input type="text" name="country" id="country" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $player->country }}">
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        <textarea id="biography" name="biography" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $player->biography }}</textarea>
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
                                <x-jet-button type="submit">Edit</x-jet-button>
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

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
    </x-app-layout>
