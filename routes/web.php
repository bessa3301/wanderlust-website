<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::get('/', function () {
        logger(App::getLocale());
        return view('welcome');
    });
});

Route::get('/lang/{lang}', [LanguageController::class, 'switchLang']);
