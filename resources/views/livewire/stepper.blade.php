<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div>
                <ol class="flex items-center w-full px-4 sm:px-0 text-sm font-medium text-center text-gray-500 sm:text-base">
                    <li class="flex md:w-full items-center {{ $currentStep != 1 ? '' : 'text-blue-600' }} sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                            @if ($currentStep == 1)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2 sm:w-5 sm:h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            @endif
                            @if ($currentStep > 1)
                                <svg aria-hidden="true" class="w-4 h-4 mr-2 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            @endif
                            Personal <span class="hidden sm:inline-flex sm:ml-1">Info</span>
                        </span>
                    </li>
                    <li class="flex md:w-full items-center {{ $currentStep != 2 ? '' : 'text-blue-600' }} after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                            @if ($currentStep == 2)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2 sm:w-5 sm:h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                                </svg>
                            @endif
                            @if ($currentStep > 2)
                                <svg aria-hidden="true" class="w-4 h-4 mr-2 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            @endif
                            Attachments
                        </span>
                    </li>
                    <li class="flex items-center {{ $currentStep != 3 ? '' : 'text-blue-600' }}">
                        @if ($currentStep == 3)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2 sm:w-5 sm:h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                        @endif
                        Attachments
                    </li>
                </ol>

                <div class="py-12">
                    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-12">
                        <div class="{{ $currentStep != 1 ? 'hidden' : 'block' }}">
                            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                <div class="flex items-center px-4 py-5 sm:px-6">
                                    <div>
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Set your account's profile information.</p>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200">
                                    {{-- <form action="{{ route('player.profile.update', ['player' => $player]) }}" method="POST" enctype="multipart/form-data"> --}}
                                    {{-- @method('PATCH') --}}
                                    {{-- @csrf --}}

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
                                                <input datepicker datepicker-format="yyyy/mm/dd" type="text" wire:model="age" id="age" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
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
                                                <div>
                                                    <div class="relative rounded-md shadow-sm">
                                                        <input type="text" name="salary" id="salary" class="block w-full rounded-md border-0 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="0.00">
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
                                                <textarea id="biography" wire:model="biography" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required></textarea>
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
                                        <x-jet-button wire:click="firstStepSubmit" wire:loading.attr="disabled">
                                            <span wire:loading.remove wire.target="firstStepSubmit">Next</span>
                                            <span wire:loading wire.target="firstStepSubmit">
                                                <div role="status">
                                                    <svg aria-hidden="true" class="w-4 h-4 mr-2 text-gray-200 animate-spin fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                                                    </svg>
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </span>
                                        </x-jet-button>
                                    </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>

                        <div class="{{ $currentStep != 2 ? 'hidden' : 'block' }}">
                            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                <div class="flex items-center px-4 py-5 sm:px-6">
                                    <div>
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Attachments</h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Upload your resumé, stats, newspaper articles, etc.</p>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200">
                                    <form wire:submit.prevent="save">
                                        @csrf
                                        <dl>
                                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">Upload Attachment</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto h-8 w-8 text-gray-300">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                                                    </svg>
                                                    <x-guarded.filepond wire:model="files" multiple />
                                                    {{-- <input id="fileupload" name="fileupload" type="file" class="mt-1"> --}}
                                                    <label for="fileupload_name" class="block text-sm font-medium leading-6 text-gray-900 mt-1">Attachment Name</label>
                                                    <input type="text" name="fileupload_name" id="fileupload_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                                </dd>
                                            </div>
                                        </dl>
                                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                            <x-jet-button wire:click="secondStepSubmit" wire:loading.attr="disabled">
                                                <span wire:loading.remove wire.target="firstStepSubmit">Next</span>
                                                <span wire:loading wire.target="firstStepSubmit">
                                                    <div role="status">
                                                        <svg aria-hidden="true" class="w-4 h-4 mr-2 text-gray-200 animate-spin fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                                                        </svg>
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </span>
                                            </x-jet-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="{{ $currentStep != 3 ? 'hidden' : 'block' }}">
                            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                <div class="flex items-center px-4 py-5 sm:px-6">
                                    <div>
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Attachments</h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Upload your resumé, stats, newspaper articles, etc.</p>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200">
                                    <form wire:submit.prevent="save">
                                        @csrf
                                        <dl>
                                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">Upload Attachment</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto h-8 w-8 text-gray-300">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                                                    </svg>
                                                    <input id="fileupload" name="fileupload" wire:model="fileupload" type="file" class="mt-1" multiple>
                                                    <label for="fileupload_name" class="block text-sm font-medium leading-6 text-gray-900 mt-1">Attachment Name</label>
                                                    <input type="text" name="fileupload_name" id="fileupload_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                                    @error('fileupload.*')
                                                        <span class="error">{{ $message }}</span>
                                                    @enderror
                                                </dd>
                                            </div>
                                        </dl>
                                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                            <x-jet-button type="submit">Submit</x-jet-button>
                                            <x-jet-button wire:click="secondStepSubmit" wire:loading.attr="disabled">Next</x-jet-button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
