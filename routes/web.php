<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product');
