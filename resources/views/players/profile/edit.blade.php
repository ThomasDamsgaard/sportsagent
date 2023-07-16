<x-app-layout>
    <div class="min-h-screen overflow-hidden bg-white py-12 lg:overflow-visible lg:px-0">
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="px-4 lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8">
                <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        <p class="text-base font-semibold leading-7 text-indigo-600">Update your account's profile information.</p>
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Profile Information</h1>
                    </div>
                </div>
            </div>

            <div class="px-4 lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8">
                <form action="{{ route('player.profile.update', ['player' => $player]) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    <div class="space-y-12">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-3">
                            <div class="sm:col-span-1">
                                <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Birthday</label>
                                <div class="mt-2">
                                    <input datepicker datepicker-format="yyyy/mm/dd" data-date="1995/02/25" type="text" name="age" id="age" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="1995/02/25" value="{{ $player->age }}">
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <label for="height" class="block text-sm font-medium leading-6 text-gray-900">Height (cm)</label>
                                <div class="mt-2">
                                    <input type="text" name="height" id="height" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="195" value="{{ $player->height }}">
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <label for="weight" class="block text-sm font-medium leading-6 text-gray-900">Weight (kg)</label>
                                <div class="mt-2">
                                    <input type="text" id="weight" name="weight" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="90" value="{{ $player->weight }}">
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Expected Salary</label>
                                <div class="mt-2">
                                    <div class="relative">
                                        <input type="number" name="salary" id="salary" class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="At Least" value="{{ \Illuminate\Support\Str::substr($player->salary, 1) }}">
                                        <div class="absolute inset-y-0 right-0 flex items-center">
                                            <label for="currency" class="sr-only">Currency</label>
                                            <select id="currency" name="currency" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm">
                                                <option value="$">USD</option>
                                                <option value="€">EUR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City (Residency)</label>
                                <div class="mt-2">
                                    <input type="text" name="city" id="city" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Los Angeles" value="{{ $player->city }}">
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country (Residency)</label>
                                <div class="mt-2">
                                    <input type="text" name="country" id="country" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="United States" value="{{ $player->country }}">
                                </div>
                            </div>

                            <div class="col-span-1">
                                <label class="mt-2 block text-sm font-medium leading-6 text-gray-900">Prefered Position(s)</label>
                                <div>
                                    <fieldset>
                                        <div>
                                            <div class="relative flex gap-x-3">
                                                <div class="flex h-6 items-center">
                                                    <input @if (in_array('center', json_decode($player->position))) checked @endif id="center" name="position[]" value="center" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                </div>
                                                <div class="text-sm leading-6">
                                                    <label for="center" class="font-medium text-gray-900">Center</label>
                                                </div>
                                            </div>
                                            <div class="relative flex gap-x-3">
                                                <div class="flex h-6 items-center">
                                                    <input @if (in_array('power-forward', json_decode($player->position))) checked @endif id="power-forward" name="position[]" value="power-forward" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                </div>
                                                <div class="text-sm leading-6">
                                                    <label for="power-forward" class="font-medium text-gray-900">Power Forward</label>
                                                </div>
                                            </div>
                                            <div class="relative flex gap-x-3">
                                                <div class="flex h-6 items-center">
                                                    <input @if (in_array('small-forward', json_decode($player->position))) checked @endif id="small-forward" name="position[]" value="small-forward" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                </div>
                                                <div class="text-sm leading-6">
                                                    <label for="small-forward" class="font-medium text-gray-900">Small Forward</label>
                                                </div>
                                            </div>
                                            <div class="relative flex gap-x-3">
                                                <div class="flex h-6 items-center">
                                                    <input @if (in_array('point-guard', json_decode($player->position))) checked @endif id="point-guard" name="position[]" value="point-guard" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                </div>
                                                <div class="text-sm leading-6">
                                                    <label for="point-guard" class="font-medium text-gray-900">Point Guard</label>
                                                </div>
                                            </div>
                                            <div class="relative flex gap-x-3">
                                                <div class="flex h-6 items-center">
                                                    <input @if (in_array('shooting-guard', json_decode($player->position))) checked @endif id="shooting-guard" name="position[]" value="shooting-guard" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                </div>
                                                <div class="text-sm leading-6">
                                                    <label for="shooting-guard" class="font-medium text-gray-900">Shooting Guard</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>


                            <div class="sm:col-span-2">
                                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                                <div class="mt-2">
                                    <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Write about yourself.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-x-6">
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            </div>

            <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10" src="https://source.unsplash.com/57rD2oDZquc" alt="">
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
