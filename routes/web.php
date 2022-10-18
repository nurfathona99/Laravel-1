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

//Route::get('/', function () {

  //  return view('layout/tampilan_login');

//});

//Route::get('/rumah',function(){
  //  return view('home');
//});

// cara buat file controller = php artisan make:controller namacontroller -r
// route about (link hyperlinknya) [(file controller yang dituju), (function yang dituju)]
//route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);

//Auth::routes();
//Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('layout/tampilan_login');

//route::get('/about',[App\Http\Controllers\AboutController::class, 'index']);

Route::view('login', 'layout/login');

//Route::get('/beranda', [App\Http\Controllers\LoginController::class, 'beranda'])->name('layout/beranda');

Route::get('/cektahun{berapa}', [App\Http\Controllers\LoginController::class, 'tahun']);

//Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('layout/login');

Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('layout/register');

//Route::post('/registeruser', [App\Http\Controllers\LoginController::class, 'registeruser'])->name('layout/registeruser');

