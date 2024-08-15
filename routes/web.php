<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NotesController;
use App\Http\Controllers\UserController;

use App\Models\Notes;

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



Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/register',[UserController::class,'registerSave'])->name('registerSave');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'loginAuth'])->name('loginAuth');
Route::get('/status',[UserController::class,'status'])->name('status');
Route::post('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/',[NotesController::class,'index'])->name('index');
Route::post('/',[NotesController::class,'create']);
Route::get('/edit/{id}',[NotesController::class,'edit']);
Route::post('/edit/{id}',[NotesController::class,'update']);
Route::get('/delete/{id}',[NotesController::class,'delete']);


