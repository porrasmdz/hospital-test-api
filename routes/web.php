<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\PatientController;
use Inertia\Inertia;

Route::get('login', [LoginController::class,'create'])->name('login');
Route::post('login', [LoginController::class,'store'])->name('login');

Route::post('logout', [LoginController::class,'destroy'])->middleware('auth');


Route::middleware('auth')->group(function() {

    Route::get('/', [PatientController::class,'index'])->name('patients.index');

    Route::get('/patients/{id}',[PatientController::class,'show'])->name('patients.show');


});

