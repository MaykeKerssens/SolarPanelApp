<?php

use App\Models\Subscription;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/subscriptions', function () {
    $subscriptions = Subscription::all();
    return view('subscriptions.index', [
        'subscriptions' => $subscriptions,
    ]);
});

Route::get('/subscriptions/{subscription}', function (Subscription $subscription) {
    return view('subscriptions.show', [
        'subscription' => $subscription,
    ]);
})->name('subscription');
