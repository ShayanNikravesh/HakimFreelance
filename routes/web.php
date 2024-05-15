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

Route::middleware('auth:managers')->group(function () {
    Route::get('panel', function () {
        return view('panel.managers.index');
    });
    Route::resource('users', UserController::class);

    Route::get('users_status/{id}/{status}',[UserController::class,'changeStatus'])->name('change-status-user');

    Route::resource('brokers', BrokerController::class);

    Route::get('broker_status/{id}/{status}',[BrokerController::class,'changeStatus'])->name('change-status-broker');

    Route::resource('tags', TagController::class);

});

Route::get('admin-login',function(){
    return view('panel.login');
})->name('login');

Route::post('admin-login', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login-p');
Route::get('logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');
