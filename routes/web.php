<?php

use App\Http\Controllers\TinTucController;
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

Route::get('/', [TinTucController::class, 'index']);
Route::get('/chi-tiet-tin/{id}', [TinTucController::class, 'show']);
Route::get('/danh-muc/{id_danh_muc}', [TinTucController::class, 'listNews']);
