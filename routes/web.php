<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
Route::get('/', function () {
    return view('home.index');
});
Route::get('/signup',[SignupController::class,'create'])->name('signup');
