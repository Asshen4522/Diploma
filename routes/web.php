<?php

use App\Http\Controllers\logistics;
use App\Http\Controllers\userController;
use App\Models\book;
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
    return view('main', [
        'Books' => book::all()
    ]);
});

Route::view('/login', 'login');
Route::view('/register', 'register');

Route::get('/cabinet', [logistics::class, 'cabinetchoice']);
Route::get('/logout', [userController::class, 'logout']);

Route::post('/registrate', [userController::class, 'registrate']);
Route::post('/validation', [userController::class, 'validate']);
Route::post('/authorisate', [userController::class, 'authorisate']);
