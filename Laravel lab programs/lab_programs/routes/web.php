<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('registration');
});


Route::get('/register', [RegistrationController::class, 'showRegistrationForm']);
Route::post('/register', [RegistrationController::class, 'processRegistration']);
 