<x-guest-layout>
    <main>
        <div class="relative overflow-hidden">
            <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
                <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    </div>
                    <div class="sm:max-w-lg">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Empower Your Sports Dreams</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600"><span class="font-semibold italic">The platform</span> to directly connect with professional teams, players and coaches from all over the world. We provide career opportunities for talented individuals in the sports industry.</p>
                        <div class="mx-auto mt-8 hidden rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 sm:block sm:max-w-sm">
                            Leverage us to get a professional contract. <a href="{{ route('players') }}" class="font-semibold text-indigo-600"><span aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                        </div>

                        <div class="mt-8 space-y-2 text-base leading-7 text-gray-600">
                            <p>
                                Several sports are large in some countries, but not as big in others, thus the talent far exceed the spots available at top level clubs.<br>
                            </p>
                            <p>
                                Join Online Sports Talents to showcase your skills to clubs and associations beyond your local scene, giving you opportunities that span continents.
                            </p>
                            <p>
                                You are among one of the first 1000 to <a href="{{ route('register') }}">sign up</a>. In return, enjoy our service for <span class="font-bold italic underline">free, forever!</span>
                            </p>
                        </div>

                        <div class="mt-8 flex items-center justify-center gap-x-6">
                            <a href="{{ route('register') }}" type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-semibold normal-case leading-7 tracking-widest text-white shadow-sm transition hover:bg-indigo-500 focus:border-indigo-900 focus:outline-none focus:ring focus:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 active:bg-indigo-900 disabled:opacity-25">Register Now, Free Forever</a>
                            <a href="{{ route('login') }}" class="rounded-md border border-gray-100 px-4 py-2 text-sm font-semibold leading-7 text-gray-800 hover:border-gray-200 hover:text-gray-900">Login To Your Account</a>
                        </div>
                    </div>
                    <div>
                        <div class="mt-10">
                            <!-- Decorative image grid -->
                            <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                                <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                    <div class="flex items-center space-x-6 lg:space-x-8">
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                                <img src="https://source.unsplash.com/XHTBZpRBoi0" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://source.unsplash.com/QAX5Ylx-lKo" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://source.unsplash.com/lBhhnhndpE0" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://source.unsplash.com/qL17dN5B3So" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://source.unsplash.com/0oMsWA8yLN0" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://source.unsplash.com/4ie4fXv7cX4" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://source.unsplash.com/IxtM5H-l1rI" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="bg-gray-50 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold leading-7 text-indigo-600">Dreams Become True</h2>
                    <p class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">We provide career opportunities for talented individuals in the sports industry</p>
                    <p class="mt-6 text-lg leading-8 text-gray-600">You are needed in a club! Maybe national, maybe in a foreign country!</p>
                </div>
                <div class="mx-auto mt-8 max-w-2xl lg:max-w-4xl">
                    <p class="mt-2 text-base leading-7 text-gray-600">
                        Several sports are large in some countries, but not as big in others, thus the talent far exceed the spots available at top level clubs.<br>
                        Join Online Sports Talents to showcase your skills to clubs and associations beyond your local scene, giving you opportunities that span continents.
                        You are among one of the first 1000 to <a href="{{ route('register') }}">sign up</a>. In return, enjoy our service for <span class="font-bold italic underline">free, forever!</span>
                    </p>
                </div>
            </div>
        </div> --}}

        <div class="bg-gray-50 py-24 sm:py-32">
            <div class="mx-auto mb-8 max-w-screen-sm text-center sm:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900">Our Team</h2>
                <p class="mb-4 font-light text-gray-600 sm:text-xl">We breath sports! So much that it is incorporated in both our professional life and spare time.</p>
                <a class="flex flex-row items-center justify-center sm:mb-16" href="mailto:thomas@onlinesportstalents.com">
                    <svg class="h-4 w-4 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                    </svg>
                    <p class="ml-1 text-base leading-6 text-indigo-600">
                        Email Us.
                    </p>
                </a>
            </div>
            <div class="mx-auto max-w-5xl gap-x-8 gap-y-20 px-6 sm:flex lg:px-8">
                <ul role="list" class="gap-x-8 gap-y-12 sm:flex sm:flex-col sm:gap-y-16 xl:col-span-2">
                    <li>
                        <div class="gap-x-6 sm:flex">
                            <img class="h-56 w-full rounded-md object-cover sm:h-56 sm:w-56" src="{{ url('/images/tr.jpg') }}" alt="">
                            <div>
                                <h3 class="mt-2 text-base font-semibold leading-7 tracking-tight text-gray-900 sm:mt-0">Troels Troelsen</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">MSc. Econ & Co-Founder</p>
                                <p class="mb-8 mt-3 font-light text-gray-600 sm:mb-4">
                                    Troels is a lifelong sportsman a.o. 3 World Master Champion Titles
                                    in 400m hurdles. Former: President of the Danish Track & Field Federation,
                                    the Marketing Commission under World Athletics, the Danish OG elite committee
                                    under the LOC and associate professor at Copenhagen Business School in Sports
                                    Economics - probably the most quoted sports economist. Chairing or member of
                                    several company boards in Denmark and part of 4 IPO's.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="gap-x-6 sm:flex">
                            <img class="h-56 w-full rounded-md object-cover sm:h-56 sm:w-56" src="{{ url('/images/th.png') }}" alt="">
                            <div>
                                <h3 class="mt-2 text-base font-semibold leading-7 tracking-tight text-gray-900 sm:mt-0">Thomas Damsgaard</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">MSc. Manu, BSc. Sports Science & Co-Founder</p>
                                <p class="mb-4 mt-3 font-light text-gray-600">
                                    Thomas has been lifting weights and doing board sports i.e. skateboard, snowboard etc, since he was a little kid. Working as a chiropractor while coding this site.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        {{-- <div class="mt-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Trusted by teams all over the world</h2>
                <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://media-2.api-sports.io/basketball/teams/464.png" alt="Transistor" width="158" height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://media-3.api-sports.io/basketball/teams/2258.png" alt="Transistor" width="158" height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://media-3.api-sports.io/basketball/teams/468.png" alt="Reform" width="158" height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://media-3.api-sports.io/basketball/teams/472.png" alt="Tuple" width="158" height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://media-2.api-sports.io/basketball/teams/471.png" alt="Tuple" width="158" height="48">
                </div>
            </div>
        </div> --}}
    </main>
</x-guest-layout>
