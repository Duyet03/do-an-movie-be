<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuanLyPhim;

class TrangChuController extends Controller
{
    public function dataTrangChu()
    {
        $listPhim = QuanLyPhim::orderBy('ten_phim', 'DESC')
            ->take(8)
            ->get();


        return response()->json([
            'listPhim'             => $listPhim,
        ]);
    }
}
