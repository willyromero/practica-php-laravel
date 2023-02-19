<?php

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

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users_crud', [UserController::class, "index"])->name('users.list');
Route::get('/users_crud/store', [UserController::class, 'storeRedirect'])->name('users.new');
Route::post('/users_crud', [UserController::class, "store"])->name('users.store');
