<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Create;
use App\Http\Controllers\Read;
use App\Http\Controllers\Update;
use App\Http\Controllers\Delete;
use App\Http\Controllers\PosController;
use App\Models\Pos;

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


Route::get('/read', [PosController::class, 'read'])->name('read');
Route::get('/', [PosController::class, 'create']);
Route::post('/store', [PosController::class, 'store']);
Route::get('/edit/{id}', [PosController::class, 'edit']);
Route::put('/update/{id}', [PosController::class, 'update']);
Route::get('/destroy/{id}', [PosController::class, 'destroy']);

// Route::get('/create', [Create::class, 'create']);
// Route::get('/read', [Read::class, 'read']);
// Route::get('/update', [Update::class, 'update']);
// Route::get('/delete', [Delete::class, 'delete']);
// Route::post('/create', [Create::class, 'create']);




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
