<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SanPhamInController;
use App\Http\Controllers\ThongTinWebsiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VatLieuInController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HinhAnhCtyController;
use App\Models\SanPhamIn;

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

Route::get('admin/dangnhap',[UserController::class,'getDangNhapAdmin']);
Route::post('admin/dangnhap',[UserController::class,'postDangNhapAdmin']);
Route::get('admin/logout',[UserController::class,'getDangXuatAdmin']);
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function (){
    Route::group(['prefix'=>'danhmuc'],function (){
        Route::get('them',[DanhMucController::class,'getThem']);
        Route::get('sua/{id}',[DanhMucController::class,'getSua']);
        Route::post('sua/{id}',[DanhMucController::class,'postSua']);
        Route::get('danhsach',[DanhMucController::class,'danhsach']);
        Route::post('them',[DanhMucController::class,'postThem']);
        Route::get('xoa/{id}',[DanhMucController::class,'xoa']);
        Route::get('tenkhongdau',[DanhMucController::class,'tenKhongDau']);
    }) ;
    Route::group(['prefix'=>'sanpham'],function (){
        Route::get('them',[SanPhamController::class,'getThem']);
        Route::get('sua/{id}',[SanPhamController::class,'getSua']);
        Route::post('sua/{id}',[SanPhamController::class,'postSua']);
        Route::get('danhsach',[SanPhamController::class,'danhsach']);
        Route::post('them',[SanPhamController::class,'postThem']);
        Route::get('xoa/{id}',[SanPhamController::class,'xoa']);
        Route::get('tenkhongdau',[SanPhamController::class,'tenKhongDau']);
    }) ;
    Route::group(['prefix'=>'user'],function (){
        Route::get('them',[UserController::class,'getThem']);
        Route::get('sua/{id}',[UserController::class,'getSua']);
        Route::post('sua/{id}',[UserController::class,'postSua']);
        Route::get('danhsach',[UserController::class,'danhsach']);
        Route::post('them',[UserController::class,'postThem']);
        Route::get('xoa/{id}',[UserController::class,'xoa']);
    }) ;
    Route::group(['prefix'=>'thongtinwebsite'],function (){
        
        Route::get('sua',[ThongTinWebsiteController::class,'getSua']);
        Route::post('sua',[ThongTinWebsiteController::class,'postSua']);
     
    }) ;
    Route::group(['prefix'=>'video'],function (){
        Route::get('them',[VideoController::class,'getThem']);
        Route::get('sua/{id}',[VideoController::class,'getSua']);
        Route::post('sua/{id}',[VideoController::class,'postSua']);
        Route::get('danhsach',[VideoController::class,'danhsach']);
        Route::post('them',[VideoController::class,'postThem']);
        Route::get('xoa/{id}',[VideoController::class,'xoa']);
    }) ;
    Route::group(['prefix'=>'hinhanhcty'],function (){
        Route::get('them',[HinhAnhCtyController::class,'getThem']);
        Route::get('sua/{id}',[HinhAnhCtyController::class,'getSua']);
        Route::post('sua/{id}',[HinhAnhCtyController::class,'postSua']);
        Route::get('danhsach',[HinhAnhCtyController::class,'danhsach']);
        Route::post('them',[HinhAnhCtyController::class,'postThem']);
        Route::get('xoa/{id}',[HinhAnhCtyController::class,'xoa']);
    }) ;
 });

 //Route for fontend
 Route::get('/',[PageController::class,'trangchu']);
 Route::get('trangchu',[PageController::class,'trangchu']);
 Route::get('danh-muc/tat-ca',[PageController::class,'tatca']);
 Route::get('danh-muc/{id}/{ten_khong_dau}',[PageController::class,'danhmuc']);
 Route::get('san-pham/{id}/{ten_khong_dau}',[PageController::class,'sanpham']);
 Route::get('van-phong/tat-ca',[PageController::class,'vanphongAll']);
 Route::get('van-phong/{id}/{ten_khong_dau}',[PageController::class,'vanphong']);
 Route::post('tim-kiem',[PageController::class,'timkiem']);
 Route::get('video-san-xuat',[PageController::class,'video']);




