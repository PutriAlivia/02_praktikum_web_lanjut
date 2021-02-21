<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
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
// /**  Praktikum 1 **/
// Route::get('/', function () {
//     echo "Selamat Datang";
//     });

// Route::get('/about', function () {
//         echo "Nim: 1941720108, Nama: Putri Alivia";
//         });

// Route::get('/articles/{id}', function ($id) {
//             echo "Halaman artikel dengan id " .$id;
//             });

// /** Praktikum 2 **/
// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ProductController::class, 'product']);

// /** Praktikum 3 */
Route::prefix('category')->group(function () {
    Route::get('/{id}', [ProductController::class,'product']);
   });


Route::get('/news/{id}', function($id) {
    return '<a href="https://www.educastudio.com/news/'.$id.'">https://www.educastudio.com/news/'.$id.'</a>';
});

Route::prefix('program')->group(function () {
    Route::get('/{id}', [ProgramController::class,'program']);
});

Route::get('/about-us', function(){
    return '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
});

Route::resource('contact', ContactController::class);



