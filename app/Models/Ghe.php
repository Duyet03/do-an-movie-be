<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    protected $table = "ghes";
    protected $fillable = [
    'ten_ghe',
    'loai_ghe',
    'trang_thai',
    'id_phong',
    ];
}
