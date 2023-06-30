<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @include('livewire.stepper.navigation')

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
                                <dl>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="flex items-center text-sm font-medium text-gray-500">Sport</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            <x-jet-select wire:model="sport" id="sport_id" class="block w-full" type="text">
                                                <option value="1">Soccer</option>
                                                <option value="2">Basketball</option>
                                            </x-jet-select>
                                        </dd>
                                    </div>

                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="flex items-center text-sm font-medium text-gray-500">Birthday</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            <input wire:model="age" datepicker datepicker-format="yyyy/mm/dd" type="text" id="age" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="1995/02/01">
                                            @error('age')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="flex items-center text-sm font-medium text-gray-500">Prefered position</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            <input wire:model="position" type="text" id="position" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Goalkeeper" required>
                                            @error('position')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="flex items-center text-sm font-medium text-gray-500">Salary expectation</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            <div>
                                                <div class="relative rounded-md shadow-sm">
                                                    <input wire:model="salary" type="text" id="salary" class="block w-full rounded-md border-0 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="0.00" required>
                                                    <div class="absolute inset-y-0 right-0 flex items-center">
                                                        <label for="currency" class="sr-only">Currency</label>
                                                        <select wire:model="currency" id="currency" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm">
                                                            <option value="$">USD</option>
                                                            <option value="€">EUR</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @error('salary')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                            <textarea wire:model="biography" id="biography" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Write a little something about yourself...." required></textarea>
                                            @error('biography')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </dd>
                                    </div>
                                </dl>
                                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                    <x-jet-button wire:click="submit" type="button">Next</x-jet-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
@endpush

@push('scripts')
@endpush
