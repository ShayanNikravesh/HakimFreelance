<?php

use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\BrokerController;
use App\Http\Controllers\Users\CommentController;
use App\Http\Controllers\Users\LoginController;
use App\Http\Controllers\Users\MessageController;
use App\Http\Controllers\Users\TagController;
use App\Jobs\Email;
use App\Mail\RegisterMail;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
    return view('users.index');
});

Route::resource('Users',UserController::class);

Route::get('login',[LoginController::class,'index'])->name('Login');

Route::post('authenticate',[LoginController::class,'authenticate'])->name('Authenticate');

Route::get('exit',[LoginController::class,'exit'])->name('Exit');

Route::resource('Broker',BrokerController::class);

Route::resource('Tags',TagController::class);

Route::get('search',[BrokerController::class,'search'])->name('search');

Route::resource('comments',CommentController::class);

Route::get('confirm/{id}/{status}', [CommentController::class,'confirm'])->name('confirm');

Route::get('userComments',[CommentController::class,'userComments'])->name('Comments')->middleware('Auth');

Route::resource('message', MessageController::class);

Route::get('check',function(){
    if (Auth::check()) {
        // کاربر لاگین کرده است
        dd('yes');
    } else {
        // کاربر لاگین نکرده است
        dd('no');
    }
});

Route::get('Hash',function(){
    $hash = Hash::make(1234);
    dd($hash);
});