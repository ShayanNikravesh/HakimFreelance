<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('admin-login',function(){
    if (auth('managers')->check() or auth('brokers')->check()){
        return redirect('/panel');
    }
    return view('panel.auth.login');
})->name('login');

Route::post('admin-login', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login-p');
Route::get('logout/{type}', [\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');

