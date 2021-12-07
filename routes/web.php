<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MartApaAja\MemberController;
use App\Http\Controllers\MartApaAja\JenisProdukController;
use App\Http\Controllers\MartApaAja\RakBelanjaController;
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
    return view('Content/Home');
})->name('Home');

Route::resource('/member', MemberController::class);
<<<<<<< HEAD
Route::resource('/jenis_produk', JenisProdukController::class);
Route::resource('/rak-belanja', RakBelanjaController::class);
=======
Route::resource('/jenis_produk', JenisProdukController::class)->only([
    'index', 'create', 'store', 'destroy'
]);
>>>>>>> 0b36a7527451e6cd6ed33f59f786659a8d68a7da
