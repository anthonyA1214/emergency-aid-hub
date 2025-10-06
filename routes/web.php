<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\MapController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\Safety\DisasterController;
use App\Http\Controllers\User\Safety\FirstAidController;
use App\Http\Controllers\User\Safety\PreparednessController;
use App\Http\Controllers\User\Safety\SafetyController;
use Illuminate\Support\Facades\Route;

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.submit');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::get('/signup', [SignupController::class, 'create'])->name('signup');
    Route::post('/signup', [SignupController::class, 'store'])->name('signup.submit');
});


// Home routes
Route::get('/', [HomeController::class, 'index']);


// Map routes
Route::get('/map', [MapController::class, 'index']);


// Safety routes
Route::prefix('safety')
->name('safety.')
->controller(SafetyController::class)
->group(function () {
    Route::get('/', 'index')->name('index');

    // Preparedness Kit
    Route::prefix('preparedness-kit')
    ->name('preparedness.')
    ->controller(PreparednessController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/items-list', 'itemsList')->name('itemsList');
    });

    // First Aid Kit
    Route::prefix('first-aid-kit')
    ->name('firstAid.')
    ->controller(FirstAidController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/items-list', 'itemsList')->name('itemsList');
    });

    // Natural And Man-Made Disasters
    Route::prefix('natural-and-man-made-disasters')
    ->name('disasters.')
    ->controller(DisasterController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');

        // Natural
        Route::get('/earthquake', 'earthquake')->name('earthquake');
        Route::get('/landslide', 'landslide')->name('landslide');
        Route::get('/sinkhole', 'sinkhole')->name('sinkhole');
        Route::get('/flood', 'flood')->name('flood');
        Route::get('/wildfire', 'wildfire')->name('wildfire');
        Route::get('/drought', 'drought')->name('drought');
        Route::get('/tornado', 'tornado')->name('tornado');
        Route::get('/typhoon', 'typhoon')->name('typhoon');

        // Man-Made
        Route::get('/chemical-spill', 'chemicalSpill')->name('chemicalSpill');
        Route::get('/infrastructure-failure', 'infrastructureFailure')->name('infrastructureFailure');
        Route::get('/transportation-accident', 'transportationAccident')->name('transportationAccident');
        Route::get('/terrorism', 'terrorism')->name('terrorism');
    });

    // Other pages
    Route::get('/how-to-provide-first-aid', 'provideFirstAid')->name('provideFirstAid');
    Route::get('/essential-contact-numbers', 'contacts')->name('contacts');
});


// Profile routes
Route::get('/profile', [ProfileController::class, 'index']);