<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietVe extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_ves';
    protected $fillable = [
        'id_chi_tiet_ve',
        'id_khach_hang',
        'id_dich_vu',
        'id_suat',
        'id_ghe',
        'id_hoa_don',
        'ghi_chu',
    ];
}
