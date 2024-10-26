<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', [StudentController::class, 'index'])->name('student.index');
Route::get('create', [StudentController::class, 'create'])->name('student.create');
Route::post('store{$id}', [StudentController::class, 'store'])->name('student.store');
Route::patch('update{$id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('destroy{id}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::get('edit{$id}', [StudentController::class, 'edit'])->name('student.edit');
