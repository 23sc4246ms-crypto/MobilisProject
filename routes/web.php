<?php

use App\Http\Controllers\MobilisController;
use Illuminate\Support\Facades\Route;

// Mobilis Marketing Landing Page & App Download Hub
Route::get('/', [MobilisController::class, 'index'])->name('mobilis.home');

// Legal & Information Pages
Route::get('/terms', [MobilisController::class, 'terms'])->name('mobilis.terms');
Route::get('/privacy', [MobilisController::class, 'privacy'])->name('mobilis.privacy');
Route::get('/security-insurance', [MobilisController::class, 'insurance'])->name('mobilis.insurance');

// Single Unified Mobilis App Download Route
Route::get('/download', [MobilisController::class, 'download'])->name('mobilis.download');
Route::get('/download/{type}', [MobilisController::class, 'download']);
