<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            [
                'id_khach_hang' => 'KH01',
                'ten_khach_hang' => 'Nguyen Van A',
                'email' => 'example@example.com',
                'password' => 'password123', // mã hóa mật khẩu
                'hash_reset' => 1,
                'is_block' => 1,
                'is_active' => 1,
                'tinh_trang' => 1,
                'id_chuc_nang' => 1,
            ],
            [
                'id_khach_hang' => 'KH02',
                'ten_khach_hang' => 'Nguyen Van B',
                'email' => 'example@example.com',
                'password' => 'password123', // mã hóa mật khẩu
                'hash_reset' => 1,
                'is_block' => 1,
                'is_active' => 1,
                'tinh_trang' => 1,
                'id_chuc_nang' => 1,
            ],
            [
                'id_khach_hang' => 'KH03',
                'ten_khach_hang' => 'Nguyen Van C',
                'email' => 'example@example.com',
                'password' => 'password123', // mã hóa mật khẩu
                'hash_reset' => 1,
                'is_block' => 1,
                'is_active' => 1,
                'tinh_trang' => 1,
                'id_chuc_nang' => 1,
            ],
        ]);
    }
}
