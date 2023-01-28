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
    return view('pages.landing');
})->name('home');
Route::get('/service', function () {
    return view('pages.service.index');
})->name('service');
Route::get('/news', function () {
    return view('pages.news');
})->name('news');
Route::get('/contact', function () {
    return view('pages.contact.index');
})->name('news');
Route::get('/appointment', function () {
    return view('pages.appointment');
})->name('appointment');
Route::get('/bluelift', function () {
    return view('pages.product.bluelift');
})->name('product.bluelift');
Route::get('/cenders', function () {
    return view('pages.product.cenders');
})->name('product.cenders');
Route::get('/indigo', function () {
    return view('pages.product.indigo');
})->name('product.indigo');
