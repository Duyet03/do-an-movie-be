<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DanhGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_gias')->delete();
        DB::table('danh_gias')->truncate();
        DB::table('danh_gias')->insert([
            [
                'id_danh_gia' => 'DG01',
                'id_phim' => 'MV01',
                'id_khach_hang' => 'KH01',
                'noi_dung' => 'Phim rất hay!',
                'sao_danh_gia' => 5,
            ],
            [
                'id_danh_gia' => 'DG02',
                'id_phim' => 'MV02',
                'id_khach_hang' => 'KH02',
                'noi_dung' => 'Phim dở tệ!',
                'sao_danh_gia' => 1,
            ],
            [
                'id_danh_gia' => 'DG03',
                'id_phim' => 'MV03',
                'id_khach_hang' => 'KH03',
                'noi_dung' => 'Phim xem mà chảy nước!',
                'sao_danh_gia' => 5,
            ],
            [
                'id_danh_gia' => 'DG04',
                'id_phim' => 'MV04',
                'id_khach_hang' => 'KH04',
                'noi_dung' => 'Phim xem mà muốn có người yêu quá à!',
                'sao_danh_gia' => 4,
            ],
            [
                'id_danh_gia' => 'DG05',
                'id_phim' => 'MV05',
                'id_khach_hang' => 'KH05',
                'noi_dung' => 'Shop có phát người yêu không ạ!',
                'sao_danh_gia' => 5,
            ]
        ]);
    }
}
