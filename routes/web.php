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

Route::namespace('\App\Http\Livewire\Resto')->prefix('resto/')->name('resto.')->middleware('auth:user')->group(function () {
    Route::get('/home', \Home::class)->name('home');
    Route::get('/kategori', \Kategori::class)->name('kategori');
    Route::get('/sub-kategori', \Subkategori::class)->name('sub-kategori');
    Route::get('/menupesanan', \Menupesanan::class)->name('menupesanan');
    Route::get('/users-management', \Usersmanagement::class)->name('users-management');
    Route::get('/pos', \Pos::class)->name('pos');
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/', App\Http\Livewire\Login::class)->name('login');
});
