<?php

use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\KhachHangController;
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


