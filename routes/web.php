<?php

use App\Http\Controllers\countryController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\postController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('employee',employeeController::class);

Route::resource('user',UserController::class);

Route::resource('post',postController::class);

Route::resource('country',countryController::class);

Route::resource('test',TestController::class);