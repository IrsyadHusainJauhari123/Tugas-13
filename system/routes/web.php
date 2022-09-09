<?php

use App\Http\Controllers\API\ProdukResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;


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
    return view('fontend.welcome');
});

//client pengunjung
Route::get('/checkout', [ClientController::class, 'showcheckout']);
Route::get('/cart', [ClientController::class, 'showcart']);
Route::get('/about', [ClientController::class, 'showabout']);
Route::get('/shop', [ClientController::class, 'showshop']);
Route::get('/home', [ClientController::class, 'showhome']);
Route::get('/contact', [ClientController::class, 'showcontact']);
Route::get('/single', [ClientController::class, 'showsingle']);





Route::get('template', function () {
    return view('template.base');
});

//admin
Route::get('/beranda', [HomeController::class, 'showberanda']);
Route::get('/beranda/{status}', [HomeController::class, 'showberanda']);
Route::get('/kategori', [HomeController::class, 'showkategori']);
Route::get('/pelanggan', [HomeController::class, 'showpelanggan']);
Route::get('/suppliyer', [HomeController::class, 'showsuppliyer']);
Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);

//admin sama penegunjung berbeda tampilan
route::prefix('pembeli/')->middleware('auth:pembeli')->group(function () {
    Route::post('/produk/filter', [ProdukController::class, 'Filter']);
    Route::resource('/produk', ProductController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/user', UserController::class);
});
route::prefix('penjual/')->middleware('auth:penjual')->group(function () {
    Route::post('/produk/filter', [ProdukController::class, 'Filter']);
    Route::resource('/produk', ProductController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/user', UserController::class);
});




//proces login
Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginprocess']);
Route::get('/logout', [AuthController::class, 'logout']);


//coba-coba
Route::get('/tets-collection', [HomeController::class, 'tetsCollection']);
Route::get('/tets-ajax', [HomeController::class, 'tetsAjax']);
