<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/service', function () {
    return view('pages.service.index');
})->name('service');
Route::get('/a-propos', function () {
    return view('pages.a-propos');
})->name('a-propos');
Route::get('/certifications', [ProductController::class, 'certifications'])->name('certifications');
Route::get('/contact', function () {
    return view('pages.contact.index');
})->name('contact');
Route::post('/contact/mail', [ContactController::class, 'mail'])->name('contact.mail');
Route::get('/appointment', function () {
    return view('pages.appointment');
})->name('appointment');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product');
