<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Gọi các Seeder cần thiết
        $this->call([
            KhachHangSeeder::class,
            ChucVuSeeder::class,
            DanhGiaSeeder::class,
            DichVuSeeder::class,
            NhanVienSeeder::class,
            PhongSeeder::class,
            SuatChieuSeeder::class,
            PhanQuyenSeeder::class,
            QuanLyPhimSeeder::class,
            SlideSeeder::class,


        ]);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
