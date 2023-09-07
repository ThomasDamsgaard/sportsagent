<div x-data="{ hide: $persist(false) }" x-cloak :class="{ 'hidden': hide }" class="fixed bottom-0 right-0 m-4 w-full max-w-xs scroll-smooth rounded-lg bg-white p-4 text-gray-500 shadow" role="alert">
    <div class="flex">
        <div class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-indigo-100 text-indigo-500">
            @svg('heroicon-s-chat-bubble-left-right', 'h-4 w-4')
        </div>
        <div class="ml-3 text-sm font-normal">
            <span class="mb-1 text-sm font-semibold text-gray-900">Give us some feedback</span>
            <div class="mb-2 text-sm font-normal">We need your help to make the platform better!</div>
            <div>
                <a target="_blank" href="https://online-sports-talents.canny.io/feedback" class="inline-flex w-full justify-center rounded-lg bg-indigo-600 px-2 py-1.5 text-center text-xs font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-300">Leave Your Feedback</a>
            </div>
        </div>
        <button @click="hide = !hide" type="button" class="-mx-1.5 -my-1.5 ml-auto inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-white p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300" data-dismiss-target="#toast-interactive" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
</div>
