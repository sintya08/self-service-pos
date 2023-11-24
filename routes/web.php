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

Route::get('/about', 'About@halaman_about');
Route::get('/create', 'Create@halaman_create');
Route::get('/update', 'Update@halaman_update');
Route::get('/delete', 'Delete@halaman_delete');

Auth::Routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'Index'])->name('home');
Route::get('/home', 'HomeController@index');
Route::get('/about', function (){
    $data=[
        'pageTitle' => 'Tentang Kami',
        'Content' => 'Ini adalah halaman tentang Kami'
    ];
    return view ('about', $data);
});

Route::get('/produk', 'App\Http\Controller\ProdukController@index');
