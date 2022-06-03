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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('login');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'role:web-developer'], function() {

    Route::get('/admin', function() {
         return 'Добро пожаловать, веб-разработчик';
    });
    Route::get('/backend/counterparty/form', [App\Http\Controllers\СounterpartyController::class, 'form'])->name('counterparty.form');
    Route::post('/backend/counterparty', [App\Http\Controllers\СounterpartyController::class, 'store'])->name('counterparty.store');
    Route::get('/backend/counterparty', [App\Http\Controllers\СounterpartyController::class, 'index'])->name('index');
    Route::get('/backend/counterparty', [App\Http\Controllers\СounterpartyController::class, 'index'])->name('counterparty.index');
    Route::post('/backend/counterparty/delete', [App\Http\Controllers\СounterpartyController::class, 'destroy'])->name('counterparty.delete');


});
Route::group(['middleware' => 'role:project-manager'], function() {
   Route::get('/manager', function() {
      return 'Добро пожаловать, менеджер';
   });
});
