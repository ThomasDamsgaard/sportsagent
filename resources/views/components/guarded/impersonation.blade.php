<div class="flex justify-center w-full" style="background: linear-gradient(to right, #018647 0%, #008570 50%, #008685 100%);">
    <div class="py-3 px-3 sm:px-6 lg:px-8">
        <div class="sm:text-center sm:px-16">
            <p class="text-white">
                <span class="md:hidden">
                    You are impersonating {{ auth()->user()->name }}
                </span>
                <span class="hidden md:inline">
                    You are impersonating {{ auth()->user()->name }}
                </span>
                <span class="block sm:ml-2 sm:inline-block">
                    <a href="{{ route('impersonation.destroy') }}" class="text-white font-bold underline">
                        Leave Impersonation &rarr;
                    </a>
                </span>
            </p>
        </div>
    </div>
</div>
