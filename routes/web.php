<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');
Route::get('/servizi', [PageController::class, 'services'])->name('services');
Route::get('/contatti', [PageController::class, 'contact'])->name('contact');