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
    return view('inicio');
})->name('inicio');

Route::get('/contacto', function () {
    return view('contact');
})->name('contacto');

Route::get('/nosotros', function () {
    return view('about');
})->name('about');

Route::get('/testimonios', function () {
    return view('testimonios');
})->name('testimonios');

Route::get('/servicios', function () {
    return view('services');
})->name('servicios');

Route::get('/page', function () {
    return view('single-page');
})->name('page');