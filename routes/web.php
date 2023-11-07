<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/hobby', function () {
	return view('hobby');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/gallery', function () {
	return view('gallery');
});

Route::get('/the-float', function () {
	return view('photo1');
});

Route::get('/rush-hour', function () {
	return view('photo2');
});

Route::get('/night-lights', function () {
	return view('photo3');
});

Route::get('/cat', function () {
	return view('photo4');
});

Route::get('/traffic', function () {
	return view('photo5');
});

Route::get('/birdie', function () {
	return view('photo6');
});

Route::get('/html-intro', function () {
	return view('tugas1');
});

Route::get('/bootstrap', function () {
	return view('tugas2');
});

Route::get('/linktree', function () {
	return view('tugas3');
});

Route::get('/validation', function () {
	return view('tugas4');
});

Route::get('/calculator', function () {
	return view('tugas5');
});

Route::get('/replikasi', function () {
	return view('tugas6');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
