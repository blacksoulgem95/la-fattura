<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Models\LegalEntity;
use Illuminate\Support\Facades\Route;


Route::get('/customers', function () {
    return view('customers.list', [
        'customers' => LegalEntity::where('is_customer', true)->get()
    ]);
})->middleware(['auth', 'verified'])->name('customers.list');

Route::get('/customers/create', function () {
    return view('customers.new');
})->middleware(['auth', 'verified'])->name('customers.new');
