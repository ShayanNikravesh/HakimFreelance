<?php

use App\Http\Controllers\Managers\BrokerController;
use App\Http\Controllers\Managers\ManagerController;
use App\Http\Controllers\Managers\TagController;
use App\Http\Controllers\Managers\UserController;
use App\Http\Controllers\Users\UserController as UsersUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Manager Panel Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('auth:managers')->prefix('admin')->group(function () {

    Route::get('panel', function () {
        return view('panel.managers.index');
    });

    //managers
    Route::resource('managers', ManagerController::class);

    //users
    Route::resource('users', UserController::class);

    Route::get('user_status/{id}/{status}',[UserController::class,'changeStatus'])->name('change-status-user');

    Route::get('users_request',[UserController::class,'signupReq'])->name('users-request');

    //brokers
    Route::resource('brokers', BrokerController::class);

    Route::get('broker_status/{id}/{status}',[BrokerController::class,'changeStatus'])->name('change-status-broker');

    Route::get('brokers_request',[BrokerController::class,'signupReq'])->name('brokers-request');

    //tags
    Route::resource('tags', TagController::class);

});
