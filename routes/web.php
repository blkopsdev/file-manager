<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileManagerController;

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
Route::get('/', [FileManagerController::class, 'home'])->middleware('auth');
Route::get('/files', [FileManagerController::class, 'index'])->middleware('auth');
Route::get('/home', [FileManagerController::class, 'home'])->middleware('auth');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
