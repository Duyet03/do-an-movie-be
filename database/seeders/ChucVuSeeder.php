<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChucVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chuc_vus')->delete();
        DB::table('chuc_vus')->truncate();
        DB::table('chuc_vus')->insert([
            [
                'id_chuc_vu' => 'QL01',
                'ten_chuc_vu' => 'Quản lý',
                'tinh_trang' => 1,
            ],
            [
                'id_chuc_vu' => 'NV01',
                'ten_chuc_vu' => 'Nhân viên',
                'tinh_trang' => 1,
            ],
            [
                'id_chuc_vu' => 'KH01',
                'ten_chuc_vu' => 'Khách hàng',
                'tinh_trang' => 1,
            ]
        ]);
    }
}
