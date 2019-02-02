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

Route::get('/', function ($locale) {
	//TODO check ip address and return the correct locale
	return view('index');
});

Route::get('{locale}', function ($locale) {
	//Debugging flashes locale
	//echo "<h1>$locale</h1>";
    App::setLocale($locale);
	return view('index');
});