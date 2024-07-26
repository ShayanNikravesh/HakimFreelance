<?php

use App\Http\Controllers\Managers\BannerController;
use App\Http\Controllers\Managers\BrokerController;
use App\Http\Controllers\Managers\ManagerController;
use App\Http\Controllers\Managers\TagController;
use App\Http\Controllers\Managers\UserController;
use App\Http\Controllers\Users\IdeaController;
use App\Http\Controllers\Users\UserController as UsersUserController;
use Binafy\LaravelUserMonitoring\Controllers\ActionMonitoringController;
use Binafy\LaravelUserMonitoring\Controllers\AuthenticationMonitoringController;
use Binafy\LaravelUserMonitoring\Controllers\VisitMonitoringController;
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

    //Message
    Route::resource('message_val', \App\Http\Controllers\Managers\MessageController::class)->only(['index', 'show', 'update']);


    //managers
    Route::resource('managers', ManagerController::class);

    Route::get('showall',[ManagerController::class,'showall'])->name('show-managers');

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

    Route::get('create',[BannerController::class,'create'])->name('new-banner');

    Route::post('store',[BannerController::class,'store'])->name('store-banner');

    Route::get('index',[BannerController::class,'index'])->name('index');

    Route::get('delete/{id}',[BannerController::class,'delete'])->name('delete-banner');

    Route::get('ideas',[IdeaController::class,'ideas'])->name('ideas');

    Route::get('idea_status/{id}/{status}',[IdeaController::class,'changeStatus'])->name('change-status-idea');

    Route::prefix('user-monitoring')->as('user-monitoring.')->group(function ($router) {
        // Visit Monitoring
        $router->get('visits-monitoring', [VisitMonitoringController::class, 'index'])->name('visits-monitoring');
        $router->delete('visits-monitoring/{visitMonitoring}', [VisitMonitoringController::class, 'destroy'])->name('visits-monitoring-delete');

        // Action Monitoring
        $router->get('actions-monitoring', [ActionMonitoringController::class, 'index'])->name('actions-monitoring');
        $router->delete('actions-monitoring/{actionMonitoring}', [ActionMonitoringController::class, 'destroy'])->name('actions-monitoring-delete');

        // Authentication Monitoring
        foreach (array_keys(config('user-monitoring.guards')) as $guards_name) {
            Route::prefix($guards_name)->as($guards_name.'.')->group(function ($router) {
                $router->get('authentications-monitoring', [AuthenticationMonitoringController::class, 'index'])->name('authentications-monitoring');
                $router->delete('authentications-monitoring/{authenticationMonitoring}', [AuthenticationMonitoringController::class, 'destroy'])->name('authentications-monitoring-delete');
            });
        }
    });

});
