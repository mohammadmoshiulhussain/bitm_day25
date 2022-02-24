<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[StudentController::class, 'index'])->name('home');

Route::get('/blog',[BlogController::class, 'index'])->name('blog');
Route::post('/add-student',[StudentController::class, 'addStudent'])->name('add-student');

Route::get('/manage-student', [StudentController::class, 'manage'])->name('manage-student');
Route::get('/new-student', [StudentController::class, 'creat'])->name('new-student');
Route::get('/edit-student/{id}', [StudentController::class, 'edit'])->name('edit-student');
Route::post('/update-student/{id}', [StudentController::class, 'update'])->name('update-student');
Route::post('/add-blog',[BlogController::class, 'store'])->name('add-blog');
