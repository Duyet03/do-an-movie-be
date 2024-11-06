<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->delete();
        DB::table('nhan_viens')->truncate();
        DB::table('nhan_viens')->insert([
            [
                'id_nhan_vien' => 'NV01',
                'ten_nhan_vien' => 'Nguyen Van A',
                'email' => 'example1@example.com',
                'password' => 'password123', // mã hóa mật khẩu
                'ngay_sinh' => '1990-01-01 00:00:00',
                'sdt' => '0123456789',
                'ngay_bat_dau' => '2024-01-01 00:00:00',
                'id_chuc_vu' => 'CV01',
                'avatar' => 'path/to/avatar1.jpg',
                'tinh_trang' => 1,
                'is_master' => 0,
            ],
            [
                'id_nhan_vien' => 'NV02',
                'ten_nhan_vien' => 'Nguyen Van B',
                'email' => 'example2@example.com',
                'password' => 'password123', // mã hóa mật khẩu
                'ngay_sinh' => '1991-01-01 00:00:00',
                'sdt' => '0123456789',
                'ngay_bat_dau' => '2024-01-01 00:00:00',
                'id_chuc_vu' => 'CV02',
                'avatar' => 'path/to/avatar2.jpg',
                'tinh_trang' => 1,
                'is_master' => 0,
            ],
            [
                'id_nhan_vien' => 'NV03',
                'ten_nhan_vien' => 'Nguyen Van C',
                'email' => 'example3@example.com',
                'password' => 'password123', // mã hóa mật khẩu
                'ngay_sinh' => '1992-01-01 00:00:00',
                'sdt' => '0123456789',
                'ngay_bat_dau' => '2024-01-01 00:00:00',
                'id_chuc_vu' => 'CV03',
                'avatar' => 'path/to/avatar3.jpg',
                'tinh_trang' => 1,
                'is_master' => 0,
            ],
        ]);
    }
}
