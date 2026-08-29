<?php

use App\Http\Controllers\AppManagerController;
use App\Http\Controllers\MobilisController;
use Illuminate\Support\Facades\Route;

// Mobilis Marketing Landing Page & App Download Hub
Route::get('/', [MobilisController::class, 'index'])->name('mobilis.home');
Route::get('/app', [MobilisController::class, 'app'])->name('mobilis.app');

// Legal & Information Pages
Route::get('/terms', [MobilisController::class, 'terms'])->name('mobilis.terms');
Route::get('/privacy', [MobilisController::class, 'privacy'])->name('mobilis.privacy');
Route::get('/security-insurance', [MobilisController::class, 'insurance'])->name('mobilis.insurance');

// Single Unified Mobilis App Download Route (Mobile-Optimized)
Route::get('/download', [MobilisController::class, 'download'])->name('mobilis.download');
Route::get('/download/{type}', [MobilisController::class, 'download']);

// Admin Authentication & App Release Manager
Route::get('/admin/login', [AppManagerController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AppManagerController::class, 'login']);
Route::post('/admin/logout', [AppManagerController::class, 'logout'])->name('admin.logout');

Route::get('/admin/app-manager', [AppManagerController::class, 'index'])->name('admin.app-manager');
Route::post('/admin/app-manager/settings', [AppManagerController::class, 'updateSettings'])->name('admin.app-manager.settings');
Route::post('/admin/app-manager/upload', [AppManagerController::class, 'upload'])->name('admin.app-manager.upload');
Route::post('/admin/app-manager/change-password', [AppManagerController::class, 'changePassword'])->name('admin.app-manager.change-password');
Route::get('/admin/app-manager/test-download', [AppManagerController::class, 'testDownload'])->name('admin.app-manager.test-download');
