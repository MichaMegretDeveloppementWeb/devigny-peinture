<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ServicesController;
use App\Http\Controllers\Web\ServiceDetailController;
use App\Http\Controllers\Web\RealisationsController;
use App\Http\Controllers\Web\RealisationDetailController;
use App\Http\Controllers\Web\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/a-propos', AboutController::class)->name('about');
Route::get('/services', ServicesController::class)->name('services');
Route::get('/services/{slug}', ServiceDetailController::class)->name('service.detail');
Route::get('/realisations', RealisationsController::class)->name('realisations');
Route::get('/realisations/{slug}', RealisationDetailController::class)->name('realisation.detail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
