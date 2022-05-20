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

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/interactivo', 'interactivo')->name('interactivo');
Route::view('/login', 'login')->name('login');
Route::view('/registro', 'registro')->name('registro');
Route::view('/contacto', 'contacto')->name('contacto');

Route::get('/inicio', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/interactivo', function () {
    return view('interactivo');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/contacto', function () {
    return view('contact');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
