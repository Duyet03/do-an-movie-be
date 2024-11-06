<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table = 'nhan_viens';

    protected $fillable = [
        'id_nhan_vien',
        'ten_nhan_vien',
        'ngay_sinh',
        'sdt',
        'email',
        'password',
        'ngay_bat_dau',
        'id_chuc_vu',
        'avatar',
        'tinh_trang',
        'is_master',
    ];
}
