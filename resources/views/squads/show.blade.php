<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row space-x-6">
                <div class="mb-12 max-w-4xl">
                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                        <div class="flex justify-between items-center px-4 py-5 sm:px-6">
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $team->name }}</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Team Information</p>
                            </div>
                            <div>
                                <img class="h-12 w-12 rounded-full ring-2 ring-gray-200" src="https://source.unsplash.com/gTV2osuOsJc" alt="">
                            </div>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                @if ($team->country)
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Country</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                            <x-dynamic-component component="flag-country-{{ $team->country }}" class="h-6 w-6" />
                                        </dd>
                                    </div>
                                @endif
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">League</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $team->league }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Games Played / Won</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">21 / 18</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Goals</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">684 - 586</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Form</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">VVLVV</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Squad</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        <div>
                                            <div id="table" class="flex flex-col">
                                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                    <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                        @foreach ($team->users as $player)
                                                            <div class="flex items-center justify-between border-b border-gray-100 @if ($loop->last) border-b-0 @endif">
                                                                <div class="flex py-6">
                                                                    <img class="h-6 w-6 rounded-full object-cover ring-2 ring-gray-200" src="{{ $player->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                                    <div class="flex items-center ml-4">
                                                                        {{ $player->name }}
                                                                    </div>
                                                                </div>
                                                                <a href="{{ route('player.show', ['player' => $player]) }}" class="text-green-600 hover:text-green-900">View</a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                        <div class="flex justify-between items-center px-4 py-5 sm:px-6">
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Next Game</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Champions League Grp. B</p>
                            </div>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Date</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">1. March</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Time</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">18.45</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Opponent</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Celje Pivovarna Lasko</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white shadow sm:rounded-lg mt-6">
                        <div class="flex justify-between items-center px-4 py-5 sm:px-6">
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Latest Game</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">1. Division</p>
                            </div>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Date</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">24. February</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Time</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">15.00</dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Opponent</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">København Fodbold</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
