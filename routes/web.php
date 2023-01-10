<?php

use App\Http\Controllers\JatekController;
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
    // return view('welcome');
    return view('index');
});

Route::get('/api/jatekok', [JatekController::class, 'index']);
Route::get('/api/jatekok/{id}', [JatekController::class, 'show']);
Route::delete('/api/jatekok/', [JatekController::class, 'destroy']);
Route::post('/api/jatekok/', [JatekController::class, 'store']);
Route::put('/api/jatekok/{id}', [JatekController::class, 'update']);