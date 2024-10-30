<?php

use App\Http\Controllers\ChiTietTheLoaiController;
use App\Http\Controllers\ChiTietVeController;
use App\Http\Controllers\HoaDonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

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


