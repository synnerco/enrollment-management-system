<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('student', \App\Http\Controllers\StudentController::class);
Route::resource('faculty', \App\Http\Controllers\FacultyController::class);
Route::resource('accountingstaff', \App\Http\Controllers\AccountingStaffController::class);
Route::resource('registrarstaff', \App\Http\Controllers\RegistrarStaffController::class);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
