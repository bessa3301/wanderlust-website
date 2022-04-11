<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::get('/', [WebsiteController::class, 'index']);
    Route::get('/about-us', [WebsiteController::class, 'aboutUs']);
    Route::get('/terms-and-conditions', [WebsiteController::class, 'termsAndConditions']);
    Route::get('/get-involved', [WebsiteController::class, 'getInvolved']);
    Route::get('/apply', [WebsiteController::class, 'apply']);
});

// Language switcher
Route::get('/lang/{lang}', [LanguageController::class, 'switchLang']);
