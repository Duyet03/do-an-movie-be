<?php


use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhongController;
use App\Http\Controllers\SuatChieuController;
use App\Http\Controllers\ChiTietTheLoaiController;
use App\Http\Controllers\ChiTietVeController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\QuanLyPhimController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\GheController;
use App\Http\Controllers\PhanQuyenController;
use App\Http\Controllers\TheLoaiController;
use App\Http\Controllers\TrangChuController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::group(['middleware' => 'adminMiddle'], function () {
    Route::get('/khach-hang/data', [KhachHangController::class, 'getData']);
    Route::post('/khach-hang/create', [KhachHangController::class, 'createData']);
    Route::put('/khach-hang/update', [KhachHangController::class, 'updateData']);
    Route::delete('/khach-hang/delete/{id}', [KhachHangController::class, 'deleteData']);
    Route::put('/khach-hang/doi-trang-thai', [KhachHangController::class, 'doiTrangThai']);

    Route::get('/nhan-vien/data', [NhanVienController::class, 'getData']);
    Route::post('/nhan-vien/create', [NhanVienController::class, 'createData']);
    Route::put('/nhan-vien/update', [NhanVienController::class, 'updateData']);
    Route::delete('/nhan-vien/delete/{id}', [NhanVienController::class, 'deleteData']);
    Route::put('/nhan-vien/doi-trang-thai', [NhanVienController::class, 'doiTrangThai']);



    Route::get('/dich-vu/data', [DichVuController::class, 'getData']);
    Route::post('/dich-vu/create', [DichVuController::class, 'createData']);
    Route::put('/dich-vu/update', [DichVuController::class, 'updateData']);
    Route::delete('/dich-vu/delete/{id}', [DichVuController::class, 'deleteData']);
    Route::put('/dich-vu/doi-trang-thai', [DichVuController::class, 'doiTrangThai']);

    Route::get('/danh-gia/data', [DanhGiaController::class, 'getData']);
    Route::post('/danh-gia/create', [DanhGiaController::class, 'createData']);
    Route::put('/danh-gia/update', [DanhGiaController::class, 'updateData']);
    Route::delete('/danh-gia/delete/{id}', [DanhGiaController::class, 'deleteData']);
    Route::put('/danh-gia/doi-trang-thai', [DanhGiaController::class, 'doiTrangThai']);



    Route::get('/chuc-vu/data', [ChucVuController::class, 'getData']);
    Route::post('/chuc-vu/create', [ChucVuController::class, 'createData']);
    Route::put('/chuc-vu/update', [ChucVuController::class, 'updateData']);
    Route::delete('/chuc-vu/delete/{id}', [ChucVuController::class, 'deleteData']);
    Route::put('/chuc-vu/doi-trang-thai', [ChucVuController::class, 'doiTrangThai']);

    Route::get('/phong/data', [PhongController::class, 'getData']);
    Route::post('/phong/create', [PhongController::class, 'store']);
    Route::delete('/phong/delete/{id}', [PhongController::class, 'destroy']);
    Route::put('/phong/update', [PhongController::class, 'update']);
    Route::put('/phong/doi-trang-thai', [PhongController::class, 'doiTrangThai']);

    Route::get('/suat-chieu/data', [SuatChieuController::class, 'getData']);
    Route::post('/suat-chieu/create', [SuatChieuController::class, 'store']);
    Route::delete('/suat-chieu/delete/{id}', [SuatChieuController::class, 'destroy']);
    Route::put('/suat-chieu/update', [SuatChieuController::class, 'update']);
    Route::put('/suat-chieu/doi-trang-thai', [SuatChieuController::class, 'doiTrangThai']);

    Route::get('/hoa-don/data', [HoaDonController::class, 'getData']);
    Route::post('/hoa-don/create', [HoaDonController::class, 'store']);
    Route::delete('/hoa-don/delete/{id}', [HoaDonController::class, 'destroy']);
    Route::put('/hoa-don/update', [HoaDonController::class, 'update']);

    Route::get('/chi-tiet-the-loai/data', [ChiTietTheLoaiController::class, 'getData']);
    Route::post('/chi-tiet-the-loai/create', [ChiTietTheLoaiController::class, 'store']);
    Route::delete('/chi-tiet-the-loai/delete/{id}', [ChiTietTheLoaiController::class, 'destroy']);
    Route::put('/chi-tiet-the-loai/update', [ChiTietTheLoaiController::class, 'update']);

    Route::get('/chi-tiet-ve/data', [ChiTietVeController::class, 'getData']);
    Route::post('/chi-tiet-ve/create', [ChiTietVeController::class, 'store']);
    Route::delete('/chi-tiet-ve/delete/{id}', [ChiTietVeController::class, 'destroy']);
    Route::put('/chi-tiet-ve/update', [ChiTietVeController::class, 'update']);




    Route::get('/ghe/data', [GheController::class, 'getData']);
    Route::post('/ghe/create', [GheController::class, 'createData']);
    Route::put('/ghe/update', [GheController::class, 'UpateData']);
    Route::delete('/ghe/delete/{id}', [GheController::class, 'deleteData']);

    Route::get('/phan-quyen/data', [PhanQuyenController::class, 'getData']);
    Route::post('/phan-quyen/create', [PhanQuyenController::class, 'createData']);
    Route::delete('/phan-quyen/delete/{id}', [PhanQuyenController::class, 'deleteData']);
    Route::put('/phan-quyen/update', [PhanQuyenController::class, 'UpateData']);


    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');



    // Route::group(['prefix' => '/admin'], function(){
    //     Route::group(['prefix' => '/quan-ly-phim'], function(){
    //         Route::get('lay-du-lieu',[QuanLyPhimController::class, 'getData']);
    //     });
    //     Route::group(['prefix' => '/chuc-nang'], function(){

    //     });
    //     Route::group(['prefix' => '/the-loai'], function(){

    //     });
    // });


    Route::group(['prefix' => '/admin'], function () {
        Route::group(['prefix' => '/quan-ly-phim'], function () {
            Route::get('/lay-du-lieu', [QuanLyPhimController::class, 'getData']);
            Route::post('/tim-quan-ly-phim', [QuanLyPhimController::class, 'searchQuanLyPhim']);
            Route::post('/them-moi-quan-ly-phim', [QuanLyPhimController::class, 'themMoiQuanLyPhim']);
            Route::delete('/xoa-quan-ly-phim/{id}', [QuanLyPhimController::class, 'xoaQuanLyPhim']);
            Route::put('/doi-trang-thai', [QuanLyPhimController::class, 'doiTrangThaiQuanLyPhim']);
            Route::put('/update', [QuanLyPhimController::class, 'createQuanLyPhim']);
        });
        Route::group(['prefix' => '/the-loai-phim'], function () {
            Route::get('/lay-du-lieu', [TheLoaiController::class, 'getData']);
            Route::post('/search', [TheLoaiController::class, 'searchTheLoai']);
            Route::post('/create', [TheLoaiController::class, 'createTheLoai']);
            Route::delete('/delete/{id}', [TheLoaiController::class, 'deleteTheLoai']);
            Route::put('/update', [TheLoaiController::class, 'updateTheLoai']);
        });
    });
});

// dang nhap admin
Route::post('/admin/dang-nhap', [NhanVienController::class, 'dangNhap']);
Route::post("/kiem-tra-token-admin", [NhanVienController::class, "kiemTraToken"]);
Route::get('/trang-chu/data', [TrangChuController::class, 'dataTrangChu']);

Route::get('/phim-chi-tiet/{id}', [QuanLyPhimController::class, 'phimChiTiet']);
Route::get('/slide/data', [SlideController::class, 'getData']);
Route::post('/slide/create', [SlideController::class, 'store']);
Route::delete('/slide/delete/{id}', [SlideController::class, 'destroy']);
Route::put('/slide/update', [SlideController::class, 'update']);
Route::put('/slide/doi-trang-thai', [SlideController::class, 'doiTrangThai']);

Route::get('/chuc-vu/data', [ChucVuController::class, 'getData']);
Route::post('/chuc-vu/create', [ChucVuController::class, 'createData']);
Route::put('/chuc-vu/update', [ChucVuController::class, 'updateData']);
Route::delete('/chuc-vu/delete/{id}', [ChucVuController::class, 'deleteData']);
Route::put('/chuc-vu/doi-trang-thai', [ChucVuController::class, 'doiTrangThai']);

Route::get('/phong/data', [PhongController::class, 'getData']);
Route::post('/phong/create', [PhongController::class, 'store']);
Route::delete('/phong/delete/{id}', [PhongController::class, 'destroy']);
Route::put('/phong/update', [PhongController::class, 'update']);
