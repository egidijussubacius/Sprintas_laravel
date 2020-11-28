<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('customers', App\Http\Controllers\CustomerController::class);
// Route::resource('country', App\Http\Controllers\CountryController::class);
// Route::resource('town', App\Http\Controllers\TownController::class);

Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\CountryController::class, 'index']);
    // Route::resource('customers', App\Http\Controllers\CustomerController::class);
    Route::resource('country', App\Http\Controllers\CountryController::class);
    Route::resource('town', App\Http\Controllers\TownController::class);
    // Route::get('customers/{id}/travel', [App\Http\Controllers\CustomerController::class, 'travel'])->name('customers.travel');
});
