<x-app-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Online Sport Talents partners with Stripe, the worlds largests online transaction company, to make sure your data is safe.') }}
        </div>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('We don\'t store any credit card information.') }}
        </div>

        <div class="mt-4 flex items-center justify-between">
            <div>
                <x-button type="button">
                    {{ __('Subscribe') }}
                </x-button>
            </div>

            <div>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="ml-2 text-sm text-gray-600 underline hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>

    @push('scripts')
        <script src="https://js.stripe.com/v3/" defer></script>
    @endpush
</x-app-layout>
