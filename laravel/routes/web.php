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

Route::get('/', function () {
	//TODO check ip address and return the correct locale
	return view('index');
});

Route::get('/language/{locale}', function ($locale) {
	// if($locale !== "de" || $locale !== "en" || $locale !== "nl"){
	// 	$locale = "en";
	// }
    App::setLocale($locale);
	return view('index');
});