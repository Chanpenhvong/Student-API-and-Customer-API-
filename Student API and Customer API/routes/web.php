<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Models\CustomerModel;
use App\Models\MajorModel;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get("/abc",function() {
    return view("abc");
});
Route::resource('/stu',StudentController::class);
Route::resource("/ma",MajorController::class);
Route::resource("/cu",CustomerController::class);




