<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LogsController;
use App\Http\Controllers\Admin\HomeController as HomeAdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PlatController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\DayController;
use App\Http\Controllers\Admin\CategorieController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.post');
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');


/** Admin **/
 Route::middleware(['auth'])->group(function(){
    Route::get('/admin/home', [HomeAdminController::class, 'index'])->name('admin.home');
    Route::get('/admin/article/articles', [ArticleController::class, 'index'])->name('admin.articles');
    Route::get('/admin/article/create', [ArticleController::class, 'create'])->name('admin.article.create');
    Route::get('/admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/logs', [LogsController::class, 'index'])->name('admin.logs');
    Route::get('/admin/article/{article}/edit', [ArticleController::class, 'edit'])->name('admin.article.edit');
    Route::get('/admin/plat/plats', [PlatController::class, 'index'])->name('admin.plat');
    Route::get('/admin/plat/create', [PlatController::class, 'create'])->name('admin.plat.create');
    Route::get('/admin/logout', [LogoutController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/day/days', [DayController::class, 'index'])->name('admin.days');
    Route::get('/admin/day/create', [DayController::class, 'create'])->name('admin.day.create');
    Route::get('/admin/day/{day}/day', [DayController::class, 'edit'])->name('admin.day.edit');
    Route::get('/admin/plat/{plat}/edit', [PlatController::class, 'edit'])->name('admin.plat.edit');
    Route::get('/admin/categorie/categories', [CategorieController::class, 'index'])->name('admin.categorie');
    Route::get('/admin/categorie/create', [CategorieController::class, 'create'])->name('admin.categorie.create');

    Route::post('/admin/user/create', [UserController::class, 'store'])->name('admin.user.post');
    Route::post('/admin/article/create', [ArticleController::class, 'store'])->name('article.post');
    Route::post('/admin/plat/create', [PlatController::class, 'store'])->name('admin.plat.post');
    Route::post('/admin/day/create', [DayController::class, 'store'])->name('admin.day.create');
    Route::post('/admin/categorie/create', [CategorieController::class, 'store'])->name('admin.categorie.post');


    

    Route::delete('/admin/article/{article}', [ArticleController::class, 'delete'])->name('admin.article.delete');
    Route::delete('/admin/day/{day}', [DayController::class, 'delete'])->name('admin.day.delete');
    Route::delete('/admin/plat/{plat}', [PlatController::class, 'delete'])->name('admin.plat.delete');
    Route::delete('/admin/categorie/{categorie}', [CategorieController::class, 'delete'])->name('admin.categorie.delete');

    Route::put('/admin/article/{article}/edit', [ArticleController::class, 'update'])->name('admin.article.update');
    Route::put('/admin/plat/{plat}/edit', [PlatController::class, 'update'])->name('admin.plat.update');
    Route::put('/admin/home', [HomeAdminController::class, 'update'])->name('admin.plat.update');
    // Route::put('/admin/day/{day}/edit', [DayController::class, 'update'])->name('admin.day.update');

 });


Route::get('/admin', [AuthController::class, 'login'])->name('admin.login');
Route:: post('/admin', [AuthController::class, 'auth'])->name('admin.auth');

