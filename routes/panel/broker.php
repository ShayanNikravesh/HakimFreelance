<?php

use App\Http\Controllers\Brokers\BrokerController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Broker Panel Routes
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

Route::middleware('auth:brokers')->prefix('broker')->group(function () {

    Route::get('panel', function () {
        return view('panel.brokers.index');
    });

    Route::resource('broker', BrokerController::class);

});
