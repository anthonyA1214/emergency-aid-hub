<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

// Authentication routes
// ===============================

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy']);

Route::get('/signup', [SignupController::class, 'create']);
Route::post('/signup', [SignupController::class, 'store']);

// ===============================


// Public routes
// ===============================

Route::get('/', function () {
    return view('user.home');
});

Route::get('/map', function () {
    return view('user.map');
});

Route::get('/safety', function () {
    return view('user.safety');
});

Route::get('/user', function () {
    return view('user.user');
});

// ===============================


// Admin routes 
// ===============================

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/users', function () {
    return view('admin.users');
});

Route::get('/admin/reports', function () {
    return view('admin.reports');
});

Route::get('/admin/analytics', function () {
    return view('admin.analytics');
});

// ==============================