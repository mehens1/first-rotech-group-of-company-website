<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;


Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
});

Route::group(['prefix' => 'companies'], function () {
    Route::controller(WebsiteController::class)->group(function () {
        Route::get('/anambra-line-ltd', 'anambra_line_ltd')->name('anambra_line_ltd');
        Route::get('/rotech-automobile-and-real-estate', 'rotech_automobile_and_real_estate')->name('rotech_automobile_and_real_estate');
    });
});


