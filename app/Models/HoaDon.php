<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;

    protected $table = 'hoa_dons';

    protected $fillable = [
        'id_hoa_don',
        'id_khach_hang',
        'id_nhan_vien',
        'tong_tien',
        'is_thanh_toan'
    ];
}
