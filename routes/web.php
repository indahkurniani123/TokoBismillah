<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;

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

Route::prefix('mahasiswa')->group(function () {

    Route::get('pendaftaran', function () {
        $title = 'Pendaftaran';
        $text = 'Halaman Pendaftaran Mahasiswa';

        return view('mahasiswa.index', compact('title', 'text'));
    });

    Route::get('ujian', function () {
        $title = 'ujian';
        $text = 'Halaman Ujian Mahasiswa';

        return view('mahasiswa.index', compact('title', 'text'));
    });

    Route::get('nilai', function () {
        $title = 'Nilai';
        $text = 'Halaman Nilai Mahasiswa';

        return view('mahasiswa.index', compact('title', 'text'));
    });

});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });


// Route::get('/latihan', [LatihanController::class, 'home']);
// Route::get('/beranda', [LatihanController::class, 'beranda']);
// Route::get('/', [HomepageController::class, 'index']);
// Route::get('/about', [HomepageController::class, 'about']);
// Route::get('/kontak', [HomepageController::class, 'kontak']);
// Route::get('/kategori', [HomepageController::class, 'kategori']);
// Route::get('/admin', [DashboardController::class, 'index']);





// Route::prefix('mahasiswa')->group(function () {

//     Route::get('/', function () {
//         return view('welcome');
//     });
//  Route::get('/pendaftaran', function () {
//      return view('/pendaftaran' , 'pendaftaran');
//  });

// });






//Kategori

// Route::group(['prefix' => 'admin'], function(){
//     Route::get('/', 'DashboardController@index');
//     //routekategori
//     Route::resource('kategori', KategoriController::class, 'index');
// });

