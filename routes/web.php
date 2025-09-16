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
    return view('user.index');
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
