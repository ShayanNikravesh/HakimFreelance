<?php

use App\Http\Controllers\BrokerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
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


Route::resource('admin',ManagerController::class);

Route::resource('show-users',UserController::class);

Route::resource('show-brokers',BrokerController::class);

Route::resource('categories',CategoryController::class);

Route::get('admin-login',function(){
    return view('admin.login');
});
Route::post('admin-login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('login');
Route::get('logout', [\App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');
