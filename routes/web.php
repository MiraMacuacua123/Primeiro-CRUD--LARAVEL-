<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::Class,'index'])->name('home');
Route::get('/users', [UserController::class,'index'])->name('users.index');
// Route::get('/users/create', [UserController::Class,'create'])->name('users.create');
// Route::post('/users', [UserController::Class,'store'])->name('users.store');
// Route::get('/users{users}', [UserController::Class,'show'])->name('users.show');
// Route::get('/users{users}/edit', [UserController::Class,'edit'])->name('users.edit');
// Route::put('/users{users}', [UserController::Class,'update'])->name('users.update');
// Route::delete('/users{users}', [UserController::Class,'destroy'])->name('users.destroy');

?>