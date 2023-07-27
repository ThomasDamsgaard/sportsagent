<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                <div class="sm:col-span-1">hej</div>
                <div class="overflow-hidden bg-white shadow sm:col-span-2 sm:rounded-lg">
                    <div class="flex items-center justify-between px-4 py-5 sm:px-6">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Talent Information</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details and attachments.</p>
                        </div>
                        <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full ring-2 ring-gray-200" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                        </div>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Full name</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $coach->name }}</dd>
                            </div>
                            @if ($coach->nationality)
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Nationality</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        <x-dynamic-component component="flag-country-{{ $coach->nationality }}" class="h-6 w-6" />
                                    </dd>
                                </div>
                            @endif
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Age</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $coach->calculateAge() }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Prefered position</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $coach->position }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Height</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $coach->height }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Weight</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $coach->weight }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Salary expectation</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">€ {{ $coach->salary }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $coach->biography }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200 bg-white">

                                        @forelse ($coach->getMedia('attachments') as $item)
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
                                            </li>
                                            @empty
                                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                    <div class="flex w-0 flex-1 items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                        </svg>

                                                        <span class="ml-2 w-0 flex-1 truncate">No attachments uploaded yet.</span>
                                                    </div>
                                                </li>
                                            @endforelse
                                        </ul>
                                    </dd>
                                </div>

                                {{-- <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Testimonials</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        <ul role="list" class="space-y-8">
                                            @forelse ($player->testimonials as $testimonial)
                                                <li>
                                                    <div class="flex items-center gap-x-6">
                                                        <img class="h-10 w-10 rounded-full" src="{{ $testimonial->testimonialWriter->profile_photo_url }}" alt="">
                                                        <div>
                                                            <h3 class="text-base font-semibold leading-7 tracking-tight"><a href="{{ route('player.show', ['player' => $testimonial->testimonialWriter]) }}">{{ $testimonial->testimonialWriter->name }}</a></h3>
                                                            <p class="text-sm font-semibold leading-6 text-indigo-600">
                                                                {{ Str::ucfirst($testimonial->testimonialWriter->type) }} - {{ Str::ucfirst($testimonial->testimonialWriter->currentTeam->name) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-1">
                                                        {{ $testimonial->body }}
                                                    </div>
                                                    <div class="mt-1 font-semibold text-gray-500">
                                                        {{ $testimonial->created_at->diffForHumans() }}
                                                    </div>
                                                </li>
                                            @empty
                                                <li>No testimonials written yet.</li>
                                            @endforelse
                                        </ul>
                                    </dd>
                                </div> --}}
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                        <div class="flex items-center px-4 py-5 sm:px-6">
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Statistics</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details and attachments.</p>
                            </div>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-white">
                                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                        <table class="min-w-full table-fixed divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        Matches
                                                    </th>
                                                    <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        Goals
                                                    </th>
                                                    <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        Shots
                                                    </th>
                                                    <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        Efficiency
                                                    </th>
                                                    <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        7m Shots
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">
                                                <tr>
                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                                        <div class="flex items-center">
                                                            13
                                                        </div>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                                        <div class="flex items-center">
                                                            6
                                                        </div>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                                        <div class="flex items-center">
                                                            24
                                                        </div>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                                        <div class="flex items-center">
                                                            25%
                                                        </div>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
                                                        <div class="flex items-center">
                                                            0
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
