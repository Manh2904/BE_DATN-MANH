<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\IndexController;
use App\Http\Controllers\Admins\LoginController;
use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\admins\DonHangController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\Admins\KhachHangController;
use App\Http\Controllers\Admins\TrangThaiDonHangController;
use App\Http\Controllers\admins\HinhThucThanhToanController;
use App\Http\Controllers\admins\SlideShowController;
use App\Http\Controllers\admins\trashs\DanhMucTrashController;
use App\Http\Controllers\admins\trashs\SanPhamTrashController;
use App\Http\Controllers\admins\trashs\TrangThaiDonHangTrashController;
use App\Http\Controllers\admins\trashs\HinhThucThanhToanTrashController;
use App\Http\Controllers\admins\trashs\KhachHangTrashController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Mỗi một route có thể trực tiếp dẫn đến 1 view hoặc 1 hàm controller

// Route dẫn đến View
// Route::get('/xin-chao', function () {
//     return view('xinchao');
// }); //Cách 1
// Route::view('/xin-chao', 'xinchao'); //Cách 2

//Truyền dữ liệu qua view
// Route::get('/xin-chao', function () {
//     $title = "Welcome";
//     $text = "Xin chào nhé!";
//     return view('xinchao', ['title' => $title,'text' => $text]);
// }); //Cách 1
Route::view('/xin-chao', 'xinchao', ['title'=> 'Welcome', 'text'=> 'Xin chào nhé!']); //Cách 2

//Route dẫn đến 1 hàm của Controller
Route::get('/admin/login',[LoginController::class, 'index'])->name('login')->middleware('auth.login');
Route::post('/admin/store',[LoginController::class, 'store'])->name('store');
Route::get('/admin/logout',[LoginController::class, 'logout'])->name('logout');
Route::middleware(['login'])->group(function(){
Route::prefix('/admin')->group(function(){
    Route::get("/index", [IndexController::class, 'index'])->name('admin');
    Route::resource('/danhmuc', DanhMucController::class);
    Route::resource('/sanpham', SanPhamController::class);
    Route::resource('/khachhang', KhachHangController::class);
    Route::resource('/trangthaidonhang', TrangThaiDonHangController::class);
    Route::resource('/hinhthucthanhtoan', HinhThucThanhToanController::class);
    Route::resource('/donhang', DonHangController::class);
    Route::resource('/hinhthucthanhtoantrash', HinhThucThanhToanTrashController::class);
    Route::resource('/trangthaidonhangtrash', TrangThaiDonHangTrashController::class);
    Route::resource('/sanphamtrash', SanPhamTrashController::class);
    Route::resource('/khachhangtrash', KhachHangTrashController::class);
    Route::resource('/danhmuctrash', DanhMucTrashController::class);
    Route::resource('/slideshow', SlideShowController::class);
    //Route resource
    // Route::get("/sanpham/test", [SanPhamController::class, 'test'])->name('admin.sanpham.test');
    //Thêm route ngoài cần viết lên trên
});
});
