<?php

use App\Http\Controllers\managers\BrokerController;
use App\Http\Controllers\managers\TagController;
use App\Http\Controllers\managers\UserController;
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

Route::middleware('auth:brokers')->group(function () {
    Route::get('broker-panel', function () {
        return view('panel.brokers.index');
    })->name('broker-panel');
});

 Route::middleware('auth:managers')->prefix('admin')->group(function () {
    Route::get('panel', function () {
        return view('panel.managers.index');
    });

    //users
    Route::resource('users', UserController::class);

    Route::get('user_status/{id}/{status}',[UserController::class,'changeStatus'])->name('change-status-user');

    //brokers
    Route::resource('brokers', BrokerController::class);

    Route::get('broker_status/{id}/{status}',[BrokerController::class,'changeStatus'])->name('change-status-broker');

    Route::get('brokers_request',[BrokerController::class,'signupReq'])->name('brokers-request');

    //tags
    Route::resource('tags', TagController::class);
 });

Route::get('admin-login',function(){
    if (auth('managers')->check() or auth('brokers')->check()){
        return redirect('/panel');
    }
    return view('panel.login');
})->name('login');

Route::post('admin-login', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login-p');
Route::get('logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');
