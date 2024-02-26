<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show']);

Route::resource('listing', ListingController::class)->only('create','store','edit','update','destroy')->middleware('auth');
Route::resource('listing', ListingController::class)->only('show', 'index');


Route::get('login', [AuthController::class, 'create'])
->name('login');
Route::post('login', [AuthController::class, 'store'])
->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
->name('logout');
