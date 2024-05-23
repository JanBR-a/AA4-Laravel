<?php

use App\Models\Phone;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/phone/add', [PhoneController::class, 'create'])->name('add-phone');
Route::post('/phone/add', [PhoneController::class, 'store'])->name('store-phone');
Route::get('/phone/{id}', [PhoneController::class, 'index']);
Route::get('/phone/{id}/transaction', [PhoneController::class, 'transaction']);
Route::delete('/phone/{id}/delete', [HomeController::class, 'delete']);



Route::get('/subscription', [SubscriptionController::class, 'index']);
Route::patch('/subscription/{id}', [SubscriptionController::class, 'update']);
Route::patch('/subscription/{id}/extend', [SubscriptionController::class, 'extend']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update']);
    Route::delete('/profile', [ProfileController::class, 'destroy']);
});


