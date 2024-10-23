<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DichVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dich_vus')->delete();
        DB::table('dich_vus')->truncate();
        DB::table('dich_vus')->insert([
            [
                'id_dich_vu' => 'DV01',
                'ten_dich_vu' => 'Ghế thường + combo Popcorn + Nước',
                'gia_tien' => 50000,
                'tinh_trang' => 1, // 1: Còn hoạt động
            ],
            [
                'id_dich_vu' => 'DV02',
                'ten_dich_vu' => 'Ghế đôi + combo Popcorn + Nước',
                'gia_tien' => 250000,
                'tinh_trang' => 1,
            ],
            [
                'id_dich_vu' => 'DV03',
                'ten_dich_vu' => 'Ghế Vip + combo Popcorn + Nước',
                'gia_tien' => 350000,
                'tinh_trang' => 1,
            ],
            [
                'id_dich_vu' => 'DV04',
                'ten_dich_vu' => 'Ghế tình yêu + combo Popcorn + Nước',
                'gia_tien' => 450000,
                'tinh_trang' => 1,
            ],
            [
                'id_dich_vu' => 'DV05',
                'ten_dich_vu' => 'Ghế tình yêu + đào + combo Popcorn + Nước',
                'gia_tien' => 1550000,
                'tinh_trang' => 1,
            ]
        ]);
    }
}
