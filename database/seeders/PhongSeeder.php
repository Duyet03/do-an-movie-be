<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phongs')->delete();
        DB::table('phongs')->truncate();
        DB::table('phongs')->insert([
            [
                'id_phong' => 'P01',
                'ten_phong' => 'Phòng A',
                'tinh_trang' => 1,
            ],
            [
                'id_phong' => 'P02',
                'ten_phong' => 'Phòng B',
                'tinh_trang' => 0,
            ],
            [
                'id_phong' => 'P03',
                'ten_phong' => 'Phòng C',
                'tinh_trang' => 1,
            ],
        ]);
    }
}
