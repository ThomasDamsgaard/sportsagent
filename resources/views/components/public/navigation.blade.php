<div class="px-6 pt-6 lg:px-8">
    <nav class="flex items-center justify-between" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Sports Agency</span>
                <x-application-mark class="h-8" />
            </a>
        </div>
        <div class="flex lg:hidden">
            <button id="open" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/bars-3 -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            {{-- <a href="{{ route('features') }}" class="text-sm font-semibold leading-6 text-gray-900">Features</a>

            <a href="{{ route('pricing') }}" class="text-sm font-semibold leading-6 text-gray-900">Pricing</a> --}}

            {{-- <a href="{{ route('players') }}" class="text-sm font-semibold leading-6 text-gray-900">For Players</a>
            <a href="{{ route('teams') }}" class="text-sm font-semibold leading-6 text-gray-900">For Teams</a> --}}


            {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a> --}}
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            @if (!Route::is('login'))
                <a href="{{ route('login') }}" class="rounded-md border border-gray-100 px-4 py-2 text-sm font-semibold leading-7 text-gray-800 hover:border-gray-200 hover:text-gray-900">Login To Your Account</a>

                {{-- <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a> --}}
            @endif
        </div>
    </nav>

    <div id="menu" role="dialog" aria-modal="true" class="hidden">
        <div focus="true" class="fixed inset-0 z-10 overflow-y-auto bg-white px-6 py-6 lg:hidden">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Sports Agency</span>
                    <x-application-mark class="h-8" />
                </a>
                <button id="close" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x-mark -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        {{-- <a href="{{ route('players') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">For Players</a>
                        <a href="{{ route('teams') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">For Teams</a> --}}
                        {{-- <a href="{{ route('features') }}" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Features</a>

                        <a href="{{ route('pricing') }}" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Pricing</a>

                        <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Company</a> --}}
                    </div>
                    <div class="py-6">
                        <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-400/10">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
