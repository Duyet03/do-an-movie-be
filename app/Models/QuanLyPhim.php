<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanLyPhim extends Model
{
    use HasFactory;

    protected $table = 'quan_ly_phims';
    protected $fillable = [
        'ten_phim',
        'slug_phim',
        'ngay_chieu',
        'thoi_luong',
        'dao_dien',
        'hinh_anh',
        'baner1',
        'baner2',
        'baner3',
        'dien_vien',
        'nha_san_xuat',
        'id_the_loai',
        'gioi_han_do_tuoi',
        'mo_ta',
        'danh_gia',
        'tinh_trang',

    ];
}