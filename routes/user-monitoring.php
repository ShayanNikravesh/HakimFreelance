<?php

use Binafy\LaravelUserMonitoring\Controllers\ActionMonitoringController;
use Binafy\LaravelUserMonitoring\Controllers\Managers\AuthenticationMonitoringController as manager_AuthenticationMonitoringController;
use Binafy\LaravelUserMonitoring\Controllers\Brokers\AuthenticationMonitoringController as broker_AuthenticationMonitoringController;

use Binafy\LaravelUserMonitoring\Controllers\VisitMonitoringController;
use Illuminate\Support\Facades\Route;

Route::prefix('user-monitoring')->as('user-monitoring.')->group(function ($router) {
    // Visit Monitoring
    $router->get('visits-monitoring', [VisitMonitoringController::class, 'index'])->name('visits-monitoring');
    $router->delete('visits-monitoring/{visitMonitoring}', [VisitMonitoringController::class, 'destroy'])->name('visits-monitoring-delete');

    // Action Monitoring
    $router->get('actions-monitoring', [ActionMonitoringController::class, 'index'])->name('actions-monitoring');
    $router->delete('actions-monitoring/{actionMonitoring}', [ActionMonitoringController::class, 'destroy'])->name('actions-monitoring-delete');

    // Authentication Monitoring
    Route::prefix('managers')->group(function ($router) {
        //for managers
        $router->get('authentications-monitoring', [manager_AuthenticationMonitoringController::class, 'index'])->name('authentications-monitoring');
        $router->delete('authentications-monitoring/{authenticationMonitoring}', [manager_AuthenticationMonitoringController::class, 'destroy'])->name('authentications-monitoring-delete');
    });

    Route::prefix('brokers')->group(function ($router) {
        //for brokers
        $router->get('authentications-monitoring', [broker_AuthenticationMonitoringController::class, 'index'])->name('authentications-monitoring');
        $router->delete('authentications-monitoring/{authenticationMonitoring}', [broker_AuthenticationMonitoringController::class, 'destroy'])->name('authentications-monitoring-delete');
    });

//    Route::prefix('users')->group(function ($router) {
//        //for users
//        $router->get('authentications-monitoring', [AuthenticationMonitoringController::class, 'index'])->name('authentications-monitoring');
//        $router->delete('authentications-monitoring/{authenticationMonitoring}', [AuthenticationMonitoringController::class, 'destroy'])->name('authentications-monitoring-delete');
//    });
});
