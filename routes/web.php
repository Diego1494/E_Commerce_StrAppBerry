<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register');

Route::post('register', [RegisterController::class, 'store']);


Route::get('login', [SessionsController::class, 'create'])
->middleware('guest')
->name('login');

Route::post('login', [SessionsController::class, 'store']);

Route::get('logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/admin', [AdminController::class, 'index'])
                ->middleware('auth.admin')
                ->name('admin.index');

Route::get('producto/create', [AdminController::class, 'create'])
                ->middleware('auth.admin')
                ->name('create');
Route::post('producto/store', [AdminController::class, 'store'])->name('store');

Route::get('edit/{id}', [AdminController::class, 'edit'])
                ->middleware('auth.admin')
                ->name('edit');

Route::post('update/{id}', [AdminController::class, 'update'])->name('update');

Route::get('destroy/{id}', [AdminController::class, 'destroy'])->name('destroy');



