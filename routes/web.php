<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', [StudentController::class, 'create']);
Route::post('/store',[StudentController::class, 'store']);
Route::get('/',[StudentController::class, 'index']);