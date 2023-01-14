<?php

use App\Http\Controllers\ChuyenMucController;
use App\Http\Controllers\LoaiSanPhamController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => '/admin'], function() {
    Route::group(['prefix' => '/loai-san-pham'], function() {
        Route::get('/index', [LoaiSanPhamController::class, 'index']);
        Route::post('/index', [LoaiSanPhamController::class, 'create']);
        Route::get('/data', [LoaiSanPhamController::class, 'getData']);

    });
});
