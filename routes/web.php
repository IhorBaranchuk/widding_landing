<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact/submit',[ContactController::class,'submit'])->name('contact-form');
Route::get('contact/all',[ContactController::class,'getAll'])->name('reviews');
Route::get('contact/all/{id}',[ContactController::class,'detail'])->name('review-detail');
Route::get('contact/all/{id}/update',[ContactController::class,'detailUpdate'])->name('review-detail-update');
Route::get('contact/all/{id}/delete',[ContactController::class,'detailDelete'])->name('review-detail-delete');
Route::post('contact/all/{id}/update-submit',[ContactController::class,'detailUpdateSubmit'])->name('review-detail-update-submit');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
