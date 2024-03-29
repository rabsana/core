<?php

use Illuminate\Support\Facades\Route;

Route::prefix("api")->name('api.')->group(function () {

    Route::prefix('v1')->name('v1.')->group(function () {

        // public routes
        Route::middleware(config('rabsana-core.apiMiddlewares.public', []))->group(function () {
        });

        Route::middleware(config('rabsana-core.apiMiddlewares.private', []))->group(function () {
        });


        // 

    });
});
