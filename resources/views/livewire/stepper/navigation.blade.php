{{-- <nav class="-mb-px flex space-x-2 mb-6" aria-label="Tabs">
    @foreach ($steps as $step)
        <div class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm
        {{ $step->isCurrent() ? 'text-indigo-500' : 'text-gray-400 group-hover:text-gray-500' }}" @if ($step->isPrevious()) wire:click="{{ $step->show() }}" @endif>
            <span>{{ $step->label }}</span>
        </div>
    @endforeach
</nav> --}}

<div>
    <ol class="flex items-center w-full sm:px-6 lg:px-8 text-sm font-medium text-center text-gray-500 sm:text-base">
        @foreach ($steps as $step)
            <li class="flex md:w-full items-center {{ $step->isCurrent() ? 'text-blue-500' : 'text-gray-400 group-hover:text-gray-500' }} @if (!$loop->last) sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 @endif">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200" @if ($step->isPrevious()) wire:click="{{ $step->show() }}" @endif>
                    @if ($step->isCurrent())
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                    @endif
                    @if ($step->isPrevious())
                        <svg aria-hidden="true" class="w-4 h-4 mr-2 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    @endif
                    {{ $step->label }}
                </span>
            </li>
        @endforeach
    </ol>
</div>
