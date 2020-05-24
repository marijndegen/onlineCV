<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\LanguageController;

Route::get('/', 'LanguageController@select');

Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    return LanguageController::show();
});

