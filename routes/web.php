<?php

use App\Http\Controllers\TinTucController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUser;

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

Route::get('/', [TinTucController::class, 'index'])->name('index');
Route::get('/chi-tiet-tin/{id}', [TinTucController::class, 'show']);
Route::get('/danh-muc/{id_danh_muc}', [TinTucController::class, 'listNews']);

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('forgotpass', [AuthController::class, 'forgotpass'])->name('forgotpass');
Route::post('forgotpass', [AuthController::class, 'sendResetLinkEmail'])->name('password.reset');

Route::get('admin', [AdminController::class, 'index'])->name('admin')->middleware(['login', IsAdmin::class]);
Route::get('list-cate', [AdminController::class, 'listCate'])->name('list-cate')->middleware(['login', IsAdmin::class]);
Route::get('create-cate', [AdminController::class, 'create'])->name('create-cate')->middleware(['login', IsAdmin::class]);
Route::post('create-cate', [AdminController::class, 'store'])->middleware(['login', IsAdmin::class]);
Route::get('edit-cate/{id}', [AdminController::class, 'edit'])->name('edit-cate')->middleware(['login', IsAdmin::class]);
Route::put('edit-cate/{id}', [AdminController::class, 'update'])->middleware(['login', IsAdmin::class]);
Route::delete('destroy-cate/{id}', [AdminController::class, 'destroy'])->name('destroy-cate')->middleware(['login', IsAdmin::class]);

Route::get('create-new', [AdminController::class, 'createTin'])->name('create-new')->middleware(['login', IsAdmin::class]);
Route::post('create-new', [AdminController::class, 'storeTin'])->middleware(['login', IsAdmin::class]);
Route::get('list-new', [AdminController::class, 'listTin'])->name('list-new')->middleware(['login', IsAdmin::class]);
Route::get('edit-new/{id}', [AdminController::class, 'editTin'])->name('edit-new')->middleware(['login', IsAdmin::class]);
Route::put('edit-new/{id}', [AdminController::class, 'updateTin'])->middleware(['login', IsAdmin::class]);
Route::delete('destroy-new/{id}', [AdminController::class, 'destroyTin'])->name('destroy-new')->middleware(['login', IsAdmin::class]);

