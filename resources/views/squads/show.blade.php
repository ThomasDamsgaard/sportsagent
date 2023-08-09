<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col space-x-6 sm:flex-row">
                <div class="mb-12 max-w-4xl">
                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                        <div class="flex items-center justify-between px-4 py-5 sm:px-6">
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $team->name }}</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Team Information</p>
                            </div>
                            <div>
                                <img class="h-12 w-12 rounded-full ring-2 ring-gray-200" src="{{ $team->logo ?: 'https://source.unsplash.com/gTV2osuOsJc' }}" alt="{{ $team->name }}">
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
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $team->league->name }}</dd>
                                </div>

                                {{-- <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
                                                    <div class="inline-block min-w-full align-middle sm:px-6 lg:px-8">
                                                        @foreach ($team->users as $player)
                                                            <div class="@if ($loop->last) border-b-0 @endif flex items-center justify-between border-b border-gray-100">
                                                                <div class="flex py-6">
                                                                    <img class="h-6 w-6 rounded-full object-cover ring-2 ring-gray-200" src="{{ $player->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                                    <div class="ml-4 flex items-center">
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
                                </div> --}}

                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="flex-grow">
                    <div style="width: 600px;"><canvas id="rankings"></canvas></div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.min.js"></script>
                    <script>
                        (async function() {
                            const data = [{
                                    year: 2019,
                                    ranking: 22
                                },
                                {
                                    year: 2020,
                                    ranking: 23
                                },
                                {
                                    year: 2021,
                                    ranking: 15
                                },
                                {
                                    year: 2022,
                                    ranking: 18
                                },
                                {
                                    year: 2023,
                                    ranking: 17
                                },
                            ];

                            new Chart(
                                document.getElementById('rankings'), {
                                    type: 'line',
                                    data: {
                                        labels: data.map(row => row.year),
                                        datasets: [{
                                            label: '{{ $team->league->country }} Rankings Last 5 Years',
                                            data: data.map(row => row.ranking),
                                            borderColor: 'pink'
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                type: 'category',
                                                labels: [15, 16, 17, 18, 19, 20, 21, 22, 23]
                                            },
                                        }
                                    }
                                }
                            );
                        })();
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
