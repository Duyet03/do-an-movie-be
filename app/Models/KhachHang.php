<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khach_hangs';

    protected $fillable = [
        'id_khach_hang',
        'ten_khach_hang',
        'email',
        'password',
        'hash_reset',
        'is_block',
        'is_active',
        'tinh_trang',
        'id_chuc_nang',
    ];
}
