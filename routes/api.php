<?php

use App\Http\Controllers\QuanLyPhimController;
use App\Http\Controllers\TheLoaiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => '/admin'],function(){
    Route::group(['prefix' => '/quan-ly-phim'], function(){
        Route::get('/lay-du-lieu',[QuanLyPhimController::class, 'getData']);
        Route::post('/tim-quan-ly-phim',[QuanLyPhimController::class, 'searchQuanLyPhim']);
        Route::post('/them-moi-quan-ly-phim',[QuanLyPhimController::class, 'themMoiQuanLyPhim']);
        Route::delete('/xoa-quan-ly-phim/{id}',[QuanLyPhimController::class, 'xoaQuanLyPhim']);
        Route::put('/doi-trang-thai',[QuanLyPhimController::class, 'doiTrangThaiQuanLyPhim']);
        Route::put('/update',[QuanLyPhimController::class, 'createQuanLyPhim']);
    });
    Route::group(['prefix' => '/the-loai-phim'], function(){
        Route::get('/lay-du-lieu',[TheLoaiController::class, 'getData']);
        Route::post('/search',[TheLoaiController::class, 'searchTheLoai']);
        Route::post('/create',[TheLoaiController::class, 'createTheLoai']);
        Route::delete('/delete/{id}',[TheLoaiController::class, 'deleteTheLoai']);
        Route::put('/update',[TheLoaiController::class, 'updateTheLoai']);
    });
});
