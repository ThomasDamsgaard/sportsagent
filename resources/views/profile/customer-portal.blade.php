<x-action-section>
    <x-slot name="title">
        {{ __('Subscription') }}
    </x-slot>

    <x-slot name="description">
        {{ __('The customer portal allows you to self-manage your payment details, invoices, and subscriptions in one place.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            {{ __('Customer Portal.') }}
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('Online Sport Talents partners with Stripe, the worlds largests online transaction company, to make sure your data is safe. We don\'t store any credit card information.') }}
            </p>
        </div>

        <div class="mt-5">
            <x-button-link href="{{ route('portal.show') }}">
                {{ __('To Customer Portal') }}
            </x-button-link>
        </div>
    </x-slot>
</x-action-section>
