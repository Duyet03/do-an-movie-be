<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slides')->delete();
        DB::table('slides')->truncate();
        DB::table('slides')->insert([
            [
                'link_hinh_anh' => 'https://media.lottecinemavn.com/Media/WebAdmin/ad26c6e69a2540cd921eef51960a22c2.jpg',
                'tinh_trang' => 1,
            ],
            [
                'link_hinh_anh' => 'https://media.lottecinemavn.com/Media/WebAdmin/95627345602649a0a2e6c1c99eba81c3.jpg',
                'tinh_trang' => 1,
            ],
            [
                'link_hinh_anh' => 'https://media.lottecinemavn.com/Media/WebAdmin/de3fd720216e47ba9c466549e7789976.jpg',
                'tinh_trang' => 1,
            ],
        ]);
    }
}
