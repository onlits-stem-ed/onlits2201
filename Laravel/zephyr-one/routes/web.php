<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/register-user', function() {
    return view('register-user');
});

Route::post('/authenticate', [UserController::class, 'authenticate']);

Route::post('/registration', [UserController::class, 'register']);

Route::get('/users', [UserController::class, 'select_all']);

Route::get('/user', [UserController::class], 'select_one');
