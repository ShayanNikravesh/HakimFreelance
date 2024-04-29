<?php

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

Route::group(['prefix'=>'admin'],function(){

    Route::resource('/',ManagerController::class);

    // Route::get('/show-users',function(){
    //     return view('admin.show-users');
    // });

});

Route::resource('show-users',UserController::class);

Route::get('admin-login',function(){
    return view('admin.login');
});
