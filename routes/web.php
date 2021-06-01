<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'index']);
Route::name('login')->get('/login', [LoginController::class, 'index']);
Route::get('/register', [LoginController::class, 'register']);
Route::get('/users', [UserController::class, 'index']);

// Route::middleware(['auth:api'])->group(function () {
    
// });