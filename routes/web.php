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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']) ->name('home');

// // Praktikum 1 route ke 127.0.0.1/
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Praktikum 1 route ke 127.0.0.1/about
// Route::get('/about',function (){
//     echo " NIM : 20417230 </br> 
//     Nama : Moch Yudha Erian Saputra";
// });

// Praktikum 1 route ke 127.0.0.1/articles/{id}
// Route::get('/articles/{id}',function($id){
//     echo "Halaman Artikel ".$id;
// });


//praktikum 2 no 1
Route::get('/', [App\Http\Controllers\PageController::class,'index']);
Route::get('/about', [App\Http\Controllers\PageController::class,'about']);
Route::get('/articles/{id}', [App\Http\Controllers\PageController::class,'articles']);

//praktikum 2 no 2
Route::get('/', [App\Http\Controllers\HomeController::class,'index']);
Route::get('/about', [App\Http\Controllers\AboutController::class,'about']);
Route::get('/articles/{id}', [App\Http\Controllers\ArticleController::class,'articles']);