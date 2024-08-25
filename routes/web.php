<?php

use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\BrokerController;
use App\Http\Controllers\Users\ChallengeController;
use App\Http\Controllers\Users\CommentController;
use App\Http\Controllers\Users\IdeaController;
use App\Http\Controllers\Users\LoginController;
use App\Http\Controllers\Users\MessageController;
use App\Http\Controllers\Users\TagController;
use App\Jobs\Email;
use App\Mail\RegisterMail;
use App\Models\Banner;
use App\Models\Broker;
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

    $brokers = Broker::orderBy("id", "desc")->take(10)->get();
    $latestTags = Tag::orderBy("id", "desc")->take(10)->get();
    $banners = Banner::all();

    return view('users.index',compact('banners','latestTags','brokers'));

});

Route::resource('Users',UserController::class);

Route::get('login',[LoginController::class,'index'])->name('Login');

Route::post('authenticate',[LoginController::class,'authenticate'])->name('Authenticate');

Route::resource('Broker',BrokerController::class);

Route::resource('Tags',TagController::class);

Route::get('search',[BrokerController::class,'search'])->name('search');

Route::resource('comments',CommentController::class);

Route::get('confirm/{id}/{status}', [CommentController::class,'confirm'])->name('confirm');

Route::get('userComments',[CommentController::class,'userComments'])->name('Comments')->middleware('Auth');

Route::resource('messages', MessageController::class);

Route::resource('ideas',IdeaController::class)->middleware('Auth');

Route::get('challenges',[ChallengeController::class,'index'])->name('challenges');

Route::post('challenges',[ChallengeController::class,'store'])->name('challenges.store');

Route::get('guide',function(){
    return view('users.guide');
})->name('guide');

Route::fallback(function(){
    return view('errors.panel.404');
});

Route::get('Hash',function(){
    $pass = Hash::make(1234);
    dd($pass);
});
