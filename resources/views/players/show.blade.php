<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div>
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="flex justify-between items-center px-4 py-5 sm:px-6">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Talent Information</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details and attachments.</p>
                        </div>
                        <div>
                            <img class="h-12 w-12 rounded-full ring-2 ring-gray-200" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                        </div>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Full name</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $player->name }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Nationality</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $player->nationality }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Age</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $player->age }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Prefered position</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $player->position }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Height</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $player->height }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Weight</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $player->weight }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Salary expectation</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">€ {{ $player->salary }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Biography</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $player->biography }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
                                        <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                            <div class="flex w-0 flex-1 items-center">
                                                <!-- Heroicon name: mini/paper-clip -->
                                                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-2 w-0 flex-1 truncate">resume.pdf</span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                            </div>
                                        </li>
                                        <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                            <div class="flex w-0 flex-1 items-center">
                                                <!-- Heroicon name: outline/video -->
                                                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                                </svg>
                                                <span class="ml-2 w-0 flex-1 truncate">gameplay.mp4</span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            </div>
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
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="table-fixed min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Matches
                                                </th>
                                                <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Goals
                                                </th>
                                                <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Shots
                                                </th>
                                                <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Efficiency
                                                </th>
                                                <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    7m Shots
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <div class="flex items-center">
                                                        13
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <div class="flex items-center">
                                                        6
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <div class="flex items-center">
                                                        24
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <div class="flex items-center">
                                                        25%
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
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
