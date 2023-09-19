<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col space-x-6 sm:flex-row">
                <div class="mb-12 max-w-4xl flex-grow">
                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                        <div class="flex items-center justify-between px-4 py-5 sm:px-6">
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $team->name }}</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Team Information</p>
                            </div>
                            <div>
                                <img class="h-16 w-16 rounded-full ring-2 ring-gray-200" src="{{ $team->logo ?: 'https://source.unsplash.com/gTV2osuOsJc' }}" alt="{{ $team->name }}">
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
                                    <dt class="text-sm font-medium text-gray-500">Socials</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">21 / 18</dd>
                                </div>

                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                                </div> --}}

                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200 bg-white">

                                            @forelse ($team->getMedia('attachments') as $item)
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
                                                        <a href="{{ route('team.attachments.show', ['item' => $item]) }}" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                                    </div>
                                                </li>
                                                @empty
                                                    <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                        <div class="flex w-0 flex-1 items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                            </svg>

                                                            <span class="ml-2 w-0 flex-1 truncate">The team has not uploaded any attachments yet.</span>
                                                        </div>
                                                    </li>
                                                @endforelse
                                            </ul>
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                        <div class="mt-12 overflow-hidden bg-white shadow sm:rounded-lg">
                            <div class="flex flex-col px-4 py-5 sm:px-6">
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Statistics</h3>
                                </div>
                                <div class="w-full"><canvas id="rankings"></canvas></div>

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
                                                        // TODO

                                                        label: 'Denmark Basketball Ligaen European Rankings Last 5 Years',
                                                        // label: '{{ $team->league->country }} Rankings Last 5 Years',
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
                    <div class="flex-grow">
                        <img class="w-full max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[24rem]" src="https://source.unsplash.com/3UARQ0Bg6kE" alt="">
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
