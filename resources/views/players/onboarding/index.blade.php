@inject('countries', 'App\Services\User\Country')
@inject('continents', 'App\Services\User\Continent')

<x-app-layout>
    <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
        <form action="{{ route('onboarding.store', ['player' => $player]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">

                <div class="px-4 lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8">

                    <div class="lg:pr-4">
                        <div class="lg:max-w-lg">
                            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Update your account's information</h1>
                            <p class="mt-4 text-base leading-7 text-gray-700">
                                <strong class="font-semibold text-gray-900">Share Your Story</strong> - Your journey as an athlete is a story important to tell. So start by telling us about your self. Once that is done, you can upload attachments to showcase yourself.
                            </p>
                            <p class="mt-8 text-base font-semibold leading-7 text-indigo-600">Profile Information</p>
                        </div>
                        <div class="mt-4 space-y-12">
                            <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-3">
                                <div class="sm:col-span-1">
                                    <label for="sport_id" class="block text-sm font-medium leading-6 text-gray-900">Sport</label>
                                    <div class="mt-2">
                                        <select id="sport_id" name="sport_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                            <option value="1">Basketball</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                    <div class="mt-2">
                                        <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="James Smith" required>
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                                    <div class="mt-2">
                                        <select id="gender" name="gender" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="nationality" class="block text-sm font-medium leading-6 text-gray-900">Nationality</label>
                                    <div class="mt-2">
                                        <select id="nationality" name="nationality" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                            @foreach ($countries->all() as $code => $country)
                                                <option value="{{ $code }}">{{ $country }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Birthday</label>
                                    <div class="mt-2">
                                        <input datepicker datepicker-format="yyyy/mm/dd" data-date="1995/02/25" type="text" name="age" id="age" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="1995/02/25" required>
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="height" class="block text-sm font-medium leading-6 text-gray-900">Height (cm)</label>
                                    <div class="mt-2">
                                        <input type="number" name="height" id="height" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="195" required>
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="weight" class="block text-sm font-medium leading-6 text-gray-900">Weight (kg)</label>
                                    <div class="mt-2">
                                        <input type="number" id="weight" name="weight" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="90" required>
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Expected Yearly Salary</label>
                                    <div class="mt-2">
                                        <div class="relative">
                                            <input type="text" name="salary" id="salary" class="block w-full rounded-md border-0 py-1.5 pr-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="At Least" value="{{ \Illuminate\Support\Str::substr($player->salary, 1) }}">
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
                                        <input type="text" name="city" id="city" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Los Angeles">
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country (Residency)</label>
                                    <div class="mt-2">
                                        <select id="country" name="country" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            @foreach ($countries->all() as $code => $country)
                                                <option value="{{ $code }}">{{ $country }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-full">
                                    <label for="biography" class="block text-sm font-medium leading-6 text-gray-900">Biography</label>
                                    <div class="mt-2">
                                        <div>
                                            <input name="biography" id="biography" type="hidden">
                                            <trix-editor input="biography" class="trix-content"></trix-editor>
                                        </div>
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Write about yourself.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="-mt-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                    <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="https://source.unsplash.com/57rD2oDZquc" alt="">
                </div>
                <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-4">
                    <div>
                        <p class="mt-2 text-base font-semibold leading-7 text-indigo-600">Career</p>
                        <div class="mt-4 space-y-12">
                            <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-3">
                                <div class="col-span-full">
                                    <label for="positions" class="block text-sm font-medium leading-6 text-gray-900">Prefered Position(s)</label>
                                    <div class="mt-2">
                                        <select id="positions" name="positions[]" multiple autocomplete="off" placeholder="Positions" class="block w-full rounded-md border-0 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" aria-placeholder="Position(s)">
                                            <option value="center">Center</option>
                                            <option value="power-forward">Power Forward</option>
                                            <option value="small-forward">Small Forward</option>
                                            <option value="point-guard">Point Guard</option>
                                            <option value="shooting-guard">Shooting Guard</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="continents" class="block text-sm font-medium leading-6 text-gray-900">I wish to play in these geographic areas</label>
                                    <div class="mt-2">
                                        <select id="continents" name="continents[]" multiple autocomplete="off" placeholder="Continent" class="block w-full rounded-md border-0 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" aria-placeholder="Continent(s)">
                                            @foreach ($continents->all() as $code => $continent)
                                                <option value="{{ $code }}">{{ $continent }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-full">
                                    <label for="career" class="block text-sm font-medium leading-6 text-gray-900">Previous Career</label>
                                    <div class="mt-2">
                                        <div>
                                            <input name="career" id="career" type="hidden">
                                            <trix-editor input="career" class="trix-content"></trix-editor>
                                        </div>
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Where did you play? When? What are your best results?</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-end gap-x-6">
                                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save Profile Information</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @livewire('onboarding-modal')

    @push('styles')
        <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" />
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
        <style>
            .trix-button-group.trix-button-group--file-tools {
                display: none;
            }

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
        <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
        {{-- <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script> --}}
        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

        <script>
            new TomSelect('#positions', {
                maxItems: 5,
                plugins: {
                    remove_button: {
                        title: 'Remove this item',
                    }
                },
            });

            new TomSelect('#continents', {
                maxItems: 6,
                plugins: {
                    remove_button: {
                        title: 'Remove this item',
                    }
                },
            });

            document.addEventListener("trix-file-accept", (event) => {
                event.preventDefault()
            })

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
