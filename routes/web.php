<?php

use Illuminate\Support\Facades\Route;

// Authentication routes
// ===============================

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/signup', function () {
    return view('auth.signup');
});

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