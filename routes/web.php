<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Private\HomeController as HomePrivateController;
use App\Http\Controllers\Admin\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/admin/home', [HomePrivateController::class, 'index'])->name('home.index');
Route::get('/admin/home/create', [HomePrivateController::class, 'create'])->name('home.create');
Route::post('/admin/home/store', [HomePrivateController::class, 'store'])->name('home.store');
Route::get('/admin/home/{home}/edit', [HomePrivateController::class, 'edit'])->name('home.edit');
Route::put('/admin/home/{home}/edit', [HomePrivateController::class, 'update'])->name('home.update');
Route::delete('/admin/home/{home}/delete', [HomePrivateController::class, 'destroy'])->name('home.destroy');

Route::get('/testlogin', function () {return view('admin.pages.dashboard.testlogin');})->name('testlogin');
Route::get('/index', function ()     {return view('admin.pages.dashboard.index');})->name('index');
Route::get('/regis', function ()     {return view('admin.pages.dashboard.regis');})->name('regis');
Route::get('/forgot', function ()    {return view('admin.pages.dashboard.forgot');})->name('forgot');
Route::get('/anim', function ()      {return view('admin.pages.auth.anim');})->name('anim');
Route::resource('/rahmanyantos', \App\Http\Controllers\RahmanyantoController::class);
