<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Online Sport Talents partners with Stripe, the worlds largests online transaction company, to make sure your data is safe.') }}
        </div>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('We don\'t store any credit card information.') }}
        </div>

        <div class="mt-4 flex items-center justify-between">
            <div>
                <x-jet-button type="button">
                    {{ __('Subscribe') }}
                </x-jet-button>
            </div>

            <div>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-app-layout>
