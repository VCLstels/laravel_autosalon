<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Articles;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CarController;
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
Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');
Route::get('/conditions', [PagesController::class, 'conditions'])->name('conditions');
Route::get('/finance', [PagesController::class, 'finance'])->name('finance');
Route::get('/clients', [PagesController::class, 'clients'])->name('clients');

Route::get('/catalog', [CarController::class, 'index'])->name('catalog');
Route::get('/products/{car}', [CarController::class, 'show'])->name('detail');

Route::resource('article',ArticlesController::class);

