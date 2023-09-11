<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div>
                <ol class="flex w-full items-center px-4 text-center text-sm font-medium text-gray-500 sm:px-0 sm:text-base">
                    <li class="{{ $step != 1 ? '' : 'text-blue-600' }} after:border-1 flex items-center after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 dark:after:border-gray-700 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                        <span class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] sm:after:hidden">
                            @if ($step == 1)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-4 w-4 sm:h-5 sm:w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            @endif
                            @if ($step > 1)
                                <svg aria-hidden="true" class="mr-2 h-4 w-4 sm:h-5 sm:w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            @endif
                            Personal <span class="hidden sm:ml-1 sm:inline-flex">Info</span>
                        </span>
                    </li>
                    <li class="{{ $step != 2 ? '' : 'text-blue-600' }} after:border-1 flex items-center after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 after:content-[''] dark:after:border-gray-700 sm:after:inline-block md:w-full xl:after:mx-10">
                        <span class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] sm:after:hidden">
                            @if ($step == 2)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-4 w-4 sm:h-5 sm:w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                                </svg>
                            @endif
                            @if ($step > 2)
                                <svg aria-hidden="true" class="mr-2 h-4 w-4 sm:h-5 sm:w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            @endif
                            Attachments
                        </span>
                    </li>
                    <li class="{{ $step != 3 ? '' : 'text-blue-600' }} flex items-center">
                        @if ($step == 3)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-4 w-4 sm:h-5 sm:w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                        @endif
                        Step
                    </li>
                </ol>
            </div>

            @if ($step == 1)
                <div class="py-12">
                    <div class="mx-auto max-w-7xl space-y-12 sm:px-6 lg:px-8">
                        <div>
                            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                <div class="flex items-center px-4 py-5 sm:px-6">
                                    <div>
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Profile Information</h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Update your account's profile information.</p>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200">
                                    <form action="{{ route('player.profile.update', ['player' => auth()->user()]) }}" method="POST">
                                        @method('PATCH')
                                        @csrf

                                        <dl>
                                            @if (!auth()->user()->sport_id)
                                                <div class="bg-red-500 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="flex items-center text-sm font-medium text-white">Sport - must be filled.</dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                        <x-select id="sport_id" class="block w-full" type="text" name="sport_id" required>
                                                            <option disabled selected></option>
                                                            <option value="1">Soccer</option>
                                                            <option value="2">Basketball</option>
                                                        </x-select>
                                                    </dd>
                                                </div>
                                            @endif

                                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="flex items-center text-sm font-medium text-gray-500">Birthday</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                    <input datepicker datepicker-format="yyyy/mm/dd" type="text" name="age" id="age" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="1995/02/01" required>
                                                </dd>
                                            </div>
                                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="flex items-center text-sm font-medium text-gray-500">Prefered position</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                    <input type="text" name="position" id="position" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Goalkeeper" required>
                                                </dd>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="flex items-center text-sm font-medium text-gray-500">Salary expectation</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                    <div>
                                                        <div class="relative rounded-md shadow-sm">
                                                            <input type="text" name="salary" id="salary" class="block w-full rounded-md border-0 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="0.00" required>
                                                            <div class="absolute inset-y-0 right-0 flex items-center">
                                                                <label for="currency" class="sr-only">Currency</label>
                                                                <select id="currency" name="currency" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm">
                                                                    <option>USD</option>
                                                                    <option>EUR</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </dd>
                                            </div>
                                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                    <textarea id="biography" name="biography" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Write a little something about yourself...." required></textarea>
                                                </dd>
                                            </div>
                                        </dl>
                                        <div class="flex items-center justify-end bg-gray-50 px-4 py-3 text-right shadow sm:rounded-bl-md sm:rounded-br-md sm:px-6">
                                            <x-button>Next</x-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ($step == 2)
                <div class="py-12">
                    <div class="mx-auto max-w-7xl space-y-12 sm:px-6 lg:px-8">
                        <div>
                            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                <div class="flex items-center px-4 py-5 sm:px-6">
                                    <div>
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Attachments</h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Upload your resumé, stats, newspaper articles, etc.</p>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200">
                                    <form action="{{ route('player.attachments.store', ['player' => auth()->user()]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <dl>
                                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">Upload Attachment</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto h-8 w-8 text-gray-300">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                                                    </svg>
                                                    <input id="fileupload" name="fileupload" type="file" class="mt-1">
                                                    <label for="fileupload_name" class="mt-1 block text-sm font-medium leading-6 text-gray-900">Attachment Name</label>
                                                    <input type="text" name="fileupload_name" id="fileupload_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                                </dd>
                                            </div>
                                        </dl>
                                        <div class="flex items-center justify-end bg-gray-50 px-4 py-3 text-right shadow sm:rounded-bl-md sm:rounded-br-md sm:px-6">
                                            <x-button type="submit">Submit</x-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>

    @push('styles')
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
    @endpush
</x-app-layout>
