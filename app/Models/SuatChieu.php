<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{
    use HasFactory;

    protected $table = 'suat_chieus';

    protected $fillable = [
        'id_suat',
        'thoi_gian_bat_dau',
        'thoi_gian_ket_thuc',
        'id_phim',
        'tinh_trang',
    ];
}
