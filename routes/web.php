<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route for /index
Route::get('/index', [UserController::class, 'index'])->name('user.index');

// Route for user edit view
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');

// Route for updating user information
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');

// Route for deleting the user
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
