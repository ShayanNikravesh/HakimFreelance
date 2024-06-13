<?php

use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\BrokerController;
use App\Models\Tag;

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
    $tags = Tag::whereNotNull('parent_id')->get();
    $parentTags = Tag::whereNull('parent_id')->get();
    return view('users.index',compact('tags','parentTags'));
});

Route::resource('Users',UserController::class);

Route::get('login',function(){
    return view('users.login');
})->name('Login');

Route::get('single-broker',function(){
    return view('users.singlebroker');
});

Route::get('404',function(){
    return view('users.404');
});

Route::resource('Broker',BrokerController::class);