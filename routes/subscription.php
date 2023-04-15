<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/subscription', function (Request $request) {
    return auth()->user()->newSubscription('default', config('services.stripe.price_id'))->checkout([
        'success_url' => route('checkout-success') . '?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => route('subscription.index'),
    ]);
})->name('subscription.index');

Route::get('/checkout-success', function (Request $request) {
    $checkoutSession = auth()->user()->stripe()->checkout->sessions->retrieve($request->get('session_id'));

    return view('subscription.success', ['checkoutSession' => $checkoutSession]);
})->name('checkout-success');

Route::get('/customer-portal', function (Request $request) {
    return $request->user()->redirectToBillingPortal(
        route('dashboard')
    );
})->name('portal.show');
