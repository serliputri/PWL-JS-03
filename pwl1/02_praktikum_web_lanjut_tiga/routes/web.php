<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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

Route::get('/', function () {
    return view('welcome');
});

//Menampilkan halaman home 
Route::get('/home', function(){
    echo('Selamat Datang di Website!!🤗');
});

//Menampilkan halaman product
Route::prefix('products')->group(function (){
    Route::get('/category/marbel-edu-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('/category/marbel-and-friends-kids-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('/category/riri-story-books-animations', function(){
        return redirect('https://www.educastudio.com/category/riri-story-books-animations');
    });
    Route::get('/category/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

//Menampilkan halaman news
Route::get('/news', function() {
    return redirect('https://www.educastudio.com/news');
});

Route::get('news/{title}', function($title){
    return redirect('https://www.educastudio.com/news/' . $title);
});

//Menampilkan halaman program 
Route::prefix('program')->group(function (){
    Route::get('karir', function(){
        return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('magang', function(){
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('kunjungan-industri', function(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

//Menampilkan about us
Route::get('/about-us', function(){
    return redirect('https://www.educastudio.com/about-us');
});

//Menampilkan contact us
Route::get('/contact-us', [ContactUsController::class, 'contactUs']);
