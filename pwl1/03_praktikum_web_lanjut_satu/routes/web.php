<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CurhatController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);
Route::prefix('products')->group(function(){
    Route::get('/',[ProductController::class, 'index']);
    Route::get('/satu',[ProductController::class, 'satu']);
    Route::get('/dua',[ProductController::class, 'dua']);
    Route::get('/tiga',[ProductController::class, 'tiga']);
});
Route::get('/news/{title}', [NewsController::class, 'berita']);
Route::prefix('program')->group(function(){
    Route::get('/satu',[ProgramController::class, 'satu']);
    Route::get('/dua',[ProgramController::class, 'dua']);
    Route::get('/tiga',[ProgramController::class, 'tiga']);
});
Route::get('/about-us', function(){
    return view('about-us');
});
Route::resource('/contact-us', ContactUsController::class)->only(['index']);

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/curhat', [CurhatController::class, 'index'])->name('curhat');