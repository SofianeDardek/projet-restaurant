<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\HomeController as HomeAdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.post');
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');

/** Admin **/
Route::get('/admin/home', [HomeAdminController::class, 'index'])->name('admin.home');
Route::get('/admin/article/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/admin/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/admin/article/create', [ArticleController::class, 'store'])->name('article.post');
