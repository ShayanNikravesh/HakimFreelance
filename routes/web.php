<?php

use App\Http\Controllers\Managers\BrokerController as manager_BrokerController;
use App\Http\Controllers\Managers\ManagerController as manager_ManagerController;
use App\Http\Controllers\Managers\TagController as manager_TagController;
use App\Http\Controllers\Managers\UserController as manager_UserController;

use App\Http\Controllers\Brokers\BrokerController as brokers_BrokerController;

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

    Route::resource('brokers', brokers_BrokerController::class);
});

Route::middleware('auth:managers')->prefix('admin')->group(function () {
    
    Route::get('panel', function () {
        return view('panel.managers.index');
    });

    //managers
    Route::resource('managers', manager_ManagerController::class);

    //users
    Route::resource('users', manager_UserController::class);

    Route::get('user_status/{id}/{status}',[manager_UserController::class,'changeStatus'])->name('change-status-user');

    //brokers
    Route::resource('brokers', manager_BrokerController::class);

    Route::get('broker_status/{id}/{status}',[manager_BrokerController::class,'changeStatus'])->name('change-status-broker');

    Route::get('brokers_request',[manager_BrokerController::class,'signupReq'])->name('brokers-request');

    //tags
    Route::resource('tags', manager_TagController::class);
});

Route::get('admin-login',function(){
    if (auth('managers')->check() or auth('brokers')->check()){
        return redirect('/panel');
    }
    return view('panel.login');
})->name('login');

Route::post('admin-login', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login-p');
Route::get('logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');
