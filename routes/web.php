<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('homepage');
Route::get('/uber-uns', [PageController::class, 'about'])->name('about');
Route::get('/dienstleistungen', [PageController::class, 'services'])->name('services');
Route::get('/kontakt', [PageController::class, 'contact'])->name('contact');
Route::get('/datenschutz', [PageController::class, 'policy'])->name('policy');
Route::get('/impressum', [PageController::class, 'impressum'])->name('impressum');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
