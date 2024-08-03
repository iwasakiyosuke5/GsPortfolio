<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('top');
})->name('top');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/work', function () {
    return view('work');
})->name('work');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class,"store"])->name('contact.store');