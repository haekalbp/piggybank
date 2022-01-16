<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;

use App\Models\Category;
use App\Models\Transaction;
use App\Models\User;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');

Route::get('/dashboard/transaction', [TransactionController::class, 'index'])->name('index')->middleware('auth');
Route::get('/dashboard/transaction/create', [TransactionController::class, 'create'])->name('create')->middleware('auth');
Route::post('/dashboard/transaction/create', [TransactionController::class, 'store'])->name('store')->middleware('auth');
Route::get('/dashboard/transaction/{id}', [TransactionController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/dashboard/transaction/{id}', [TransactionController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/dashboard/transaction/{id}', [TransactionController::class, 'destroy'])->name('destroy')->middleware('auth');


Route::get('/dashboard/category', [CategoryController::class, 'index'])->name('index')->middleware('auth');
Route::get('/dashboard/category/create', [CategoryController::class, 'create'])->name('create')->middleware('auth');
Route::post('/dashboard/category/create', [CategoryController::class, 'store'])->name('store')->middleware('auth');
Route::get('/dashboard/category/{id}', [CategoryController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/dashboard/category/{id}', [CategoryController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/dashboard/category/{id}', [CategoryController::class, 'destroy'])->name('destroy')->middleware('auth');

Route::resource('/dashboard/transaction', TransactionController::class)->middleware('auth');
Route::resource('/dashboard/category', CategoryController::class)->middleware('auth');