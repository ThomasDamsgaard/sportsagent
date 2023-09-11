<x-app-layout>
    <div class="relative overflow-hidden bg-white">
        <div class="mx-auto max-w-screen-xl">
            <div class="relative z-10 bg-white pb-8 sm:pb-16 md:pb-20 lg:w-full lg:max-w-2xl lg:pb-28 xl:pb-32" x-data="{ open: false }">
                <svg class="absolute inset-y-0 right-0 hidden h-full w-48 translate-x-1/2 transform text-white lg:block" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div class="relative px-4 pt-6 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                        <div class="flex flex-shrink-0 flex-grow items-center lg:flex-grow-0">
                            <div class="flex w-full items-center justify-between md:w-auto">
                                <a href="{{ route('dashboard') }}" class="hover:zoom-1">
                                    <x-heroicon-o-globe-alt class="h-8 w-auto text-indigo-600 sm:h-10" />
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none" @click="open = true">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="hidden md:ml-10 md:block md:pr-4">
                            <a href="{{ route('dashboard') }}" class="font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:text-gray-900 focus:outline-none">
                                {{ config('app.name') }}
                            </a>
                            <a href="#" class="ml-8 font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:text-gray-900 focus:outline-none">
                                Destinations
                            </a>
                            <a href="#" class="ml-8 font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:text-gray-900 focus:outline-none">
                                Blog
                            </a>
                            <a href="#" class="ml-8 font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:text-gray-900 focus:outline-none">
                                About
                            </a>

                            @auth
                                <a href="{{ route('dashboard') }}" class="ml-8 font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-900 focus:text-indigo-700 focus:outline-none">
                                    {{ __('Dashboard') }}
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="ml-8 font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-900 focus:text-indigo-700 focus:outline-none">
                                    {{ __('Login') }}
                                </a>
                            @endauth
                        </div>
                    </nav>
                </div>

                <div x-show="open" @click.away="open = false" class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden">
                    <div class="rounded-lg shadow-md">
                        <div class="shadow-xs overflow-hidden rounded-lg bg-white">
                            <div class="flex items-center justify-between px-5 pt-4">
                                <div>
                                    <x-heroicon-o-globe-alt class="h-8 w-auto text-indigo-600 sm:h-10" />
                                </div>
                                <div class="-mr-2" @click="open = false">
                                    <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none">
                                        <x-heroicon-o-x-mark class="h-6 w-6" />
                                    </button>
                                </div>
                            </div>

                            <div class="px-2 pb-3 pt-2">
                                <a href="{{ route('dashboard') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 transition duration-150 ease-in-out hover:bg-gray-50 hover:text-gray-900 focus:bg-gray-50 focus:text-gray-900 focus:outline-none">
                                    {{ config('app.name') }}
                                </a>
                                <a href="#" class="mt-1 block rounded-md px-3 py-2 text-base font-medium text-gray-700 transition duration-150 ease-in-out hover:bg-gray-50 hover:text-gray-900 focus:bg-gray-50 focus:text-gray-900 focus:outline-none">
                                    Destinations
                                </a>
                                <a href="#" class="mt-1 block rounded-md px-3 py-2 text-base font-medium text-gray-700 transition duration-150 ease-in-out hover:bg-gray-50 hover:text-gray-900 focus:bg-gray-50 focus:text-gray-900 focus:outline-none">
                                    Blog
                                </a>
                                <a href="#" class="mt-1 block rounded-md px-3 py-2 text-base font-medium text-gray-700 transition duration-150 ease-in-out hover:bg-gray-50 hover:text-gray-900 focus:bg-gray-50 focus:text-gray-900 focus:outline-none">
                                    About
                                </a>
                            </div>

                            <div>
                                @auth
                                    <a href="{{ route('dashboard') }}" class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-indigo-600 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-indigo-700 focus:bg-gray-100 focus:text-indigo-700 focus:outline-none">
                                        {{ __('Dashboard') }}
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-indigo-600 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-indigo-700 focus:bg-gray-100 focus:text-indigo-700 focus:outline-none">
                                        {{ __('Login') }}
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mx-auto mt-10 max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                            What is
                            <br class="xl:hidden" />
                            <span class="text-indigo-600">your next destination</span>?
                        </h2>
                        <p class="mt-3 text-base text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg sm:leading-7 md:mt-5 md:text-xl lg:mx-0">
                            Curate your bucket list and keep track of your next trips. Search for the most popular destinations on our planet.
                        </p>

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{ route('dashboard') }}#search" class="focus:shadow-outline flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out hover:bg-indigo-500 focus:outline-none md:px-10 md:py-4 md:text-lg">
                                    Search
                                </a>
                            </div>
                            <div class="mt-3 sm:ml-3 sm:mt-0">
                                <a href="{{ route('register') }}" class="focus:shadow-outline flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-100 px-8 py-3 text-base font-medium leading-6 text-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-50 hover:text-indigo-600 focus:border-indigo-300 focus:outline-none md:px-10 md:py-4 md:text-lg">
                                    Register
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img src="https://source.unsplash.com/ONpGBpns3cs" alt="" class="h-56 w-full object-cover sm:h-72 md:h-96 lg:h-full lg:w-full">
        </div>
    </div>

    <div id="search" class="relative px-4 pb-20 pt-16 sm:px-6 lg:px-8 lg:pb-28 lg:pt-24">
        <div class="absolute inset-0">
            <div class="h-1/3 bg-gray-50 sm:h-2/3"></div>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Ready to dive in?
                </h2>
                <p class="mx-auto mt-3 max-w-2xl text-xl leading-7 text-gray-500 sm:mt-4">
                    Search for your next destination and save it to your bucket list.
                </p>
                <div class="mt-8">
                    <div class="relative mx-auto mt-1 max-w-2xl rounded-md shadow-sm">
                        <x-input name="search" placeholder="Where to next?" class="form-input block w-full pr-10 sm:text-xl sm:leading-8" />
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                            <x-heroicon-s-magnifying-glass class="h-5 w-5 text-gray-400" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="relative flex-shrink-0">

                        <img src="https://source.unsplash.com/iFtuhgn7fYs" class="h-48 w-full object-cover" />

                        <button class="absolute right-0 top-0 mr-2 mt-2 rounded-md bg-gray-100 bg-opacity-50 p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:bg-opacity-100 hover:text-red-500 focus:bg-gray-100 focus:text-red-500 focus:outline-none">
                            <x-heroicon-s-heart class="h-6 w-6" />
                        </button>
                    </div>
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                            <div class="text-sm font-medium leading-5 text-indigo-600">
                                <a href="#" class="hover:underline">
                                    Europe
                                </a>
                            </div>
                            <a href="#" class="block">
                                <h3 class="mt-2 text-xl font-semibold leading-7 text-gray-900">
                                    Berlin, Germany
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="relative flex-shrink-0">

                        <img src="https://source.unsplash.com/SVVTZtTGyaU" class="h-48 w-full object-cover" />

                        <button class="absolute right-0 top-0 mr-2 mt-2 rounded-md bg-gray-100 bg-opacity-50 p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:bg-opacity-100 hover:text-red-500 focus:bg-gray-100 focus:text-red-500 focus:outline-none">
                            <x-heroicon-s-heart class="h-6 w-6" />
                        </button>
                    </div>
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                            <div class="grid grid-cols-2 gap-4 text-sm font-medium leading-5 text-indigo-600">
                                <a href="#" class="hover:underline">
                                    North America
                                </a>
                            </div>
                            <a href="#" class="block">
                                <h3 class="mt-2 text-xl font-semibold leading-7 text-gray-900">
                                    New York, United States
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="relative flex-shrink-0">

                        <img src="https://source.unsplash.com/t9Td0zfDTwI" class="h-48 w-full object-cover" />

                        <button class="absolute right-0 top-0 mr-2 mt-2 rounded-md bg-gray-100 bg-opacity-50 p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:bg-opacity-100 hover:text-red-500 focus:bg-gray-100 focus:text-red-500 focus:outline-none">
                            <x-heroicon-s-heart class="h-6 w-6" />
                        </button>
                    </div>
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                            <div class="grid grid-cols-2 gap-4 text-sm font-medium leading-5 text-indigo-600">
                                <a href="#" class="hover:underline">
                                    Europe
                                </a>
                            </div>
                            <a href="#" class="block">
                                <h3 class="mt-2 text-xl font-semibold leading-7 text-gray-900">
                                    Paris, France
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base leading-7 text-gray-600">Transactions every 24 hours</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">44 million</dd>
                </div>

                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base leading-7 text-gray-600">Assets under holding</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">$119 trillion</dd>
                </div>

                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base leading-7 text-gray-600">New users annually</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">46,000</dd>
                </div>
            </dl>
        </div>
    </div>

    <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <div class="max-w-xl lg:max-w-lg">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Subscribe to our newsletter.</h2>
                    <p class="mt-4 text-lg leading-8 text-gray-300">Nostrud amet eu ullamco nisi aute in ad minim nostrud adipisicing velit quis. Duis tempor incididunt dolore.</p>
                    <div class="mt-6 flex max-w-md gap-x-4">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border border-white/10 bg-white/5 px-[calc(theme(spacing.4)-1px)] py-[calc(theme(spacing[1.5])-1px)] text-base leading-7 text-white placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Enter your email">
                        <button type="submit" class="flex-none rounded-md bg-indigo-500 px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
                    </div>
                </div>
                <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-white">Weekly articles</dt>
                        <dd class="mt-2 leading-7 text-gray-400">Non laboris consequat cupidatat laborum magna. Eiusmod non irure cupidatat duis commodo amet.</dd>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                            </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-white">No spam</dt>
                        <dd class="mt-2 leading-7 text-gray-400">Officia excepteur ullamco ut sint duis proident non adipisicing. Voluptate incididunt anim.</dd>
                    </div>
                </dl>
            </div>
        </div>
        <svg class="absolute left-1/2 top-0 -z-10 h-[42.375rem] -translate-x-1/2 blur-3xl xl:-top-6" viewBox="0 0 1155 678" fill="none">
            <path fill="url(#09dbde42-e95c-4b47-a4d6-0c523c2fca9a)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
            <defs>
                <linearGradient id="09dbde42-e95c-4b47-a4d6-0c523c2fca9a" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#9089FC" />
                    <stop offset="1" stop-color="#FF80B5" />
                </linearGradient>
            </defs>
        </svg>
    </div>

</x-app-layout>
