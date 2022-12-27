<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StructureController;
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
Route::get('/about', [App\Http\Controllers\HomeController::class, "about"])->name("about");
Route::get('/kepengurusan', [App\Http\Controllers\HomeController::class, "kepengurusan"])->name("kepengurusan");
Route::get('/artikel', [App\Http\Controllers\HomeController::class, "artikel"])->name("artikel");
Route::get('/detail-artikel/{slug}', [App\Http\Controllers\HomeController::class, "detail"])->name("detail-artikel");
Route::get('/galeri', [App\Http\Controllers\HomeController::class, "galeri"])->name("galeri");
Route::get('/opini', [App\Http\Controllers\HomeController::class, "opini"])->name("opini");
Route::get('/dokumen', [App\Http\Controllers\HomeController::class, "dokumen"])->name("dokumen");
Route::get('/kegiatan', [App\Http\Controllers\HomeController::class, "kegiatan"])->name("kegiatan");
Route::get('/kontak', [App\Http\Controllers\HomeController::class, "kontak"])->name("kontak");
Route::get('/joinus', [App\Http\Controllers\HomeController::class, "joinus"])->name("joinus");

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('sliders', SliderController::class);
    Route::resource('activities', ActivityController::class);
    Route::resource('structures', StructureController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('articles', ArticleController::class);

    // Route::get('contacts', [ContactController::class, 'index']);
    // Route::put('contacts/{id}', [ContactController::class, 'update']);
});
