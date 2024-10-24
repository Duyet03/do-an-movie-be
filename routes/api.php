<?php

use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhongController;
use App\Http\Controllers\SuatChieuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
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
