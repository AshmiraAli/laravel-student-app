<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', [StudentController::class, 'create']);
Route::post('/store',[StudentController::class, 'store']);

Route::get('/',[StudentController::class, 'index']);
Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::put('/update/{id}', [StudentController::class, 'update']);

Route::delete('/delete/{id}', [StudentController::class, 'destroy']);

Route::get('/', [StudentController::class, 'index'])->name('students.index');