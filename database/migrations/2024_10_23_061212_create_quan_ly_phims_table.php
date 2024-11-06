<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quan_ly_phims', function (Blueprint $table) {
            $table->id();
            $table->string('ten_phim');
            $table->date('ngay_chieu');
            $table->string('thoi_luong');
            $table->string('dao_dien');
            $table->string('hinh_anh');
            $table->string('dien_vien');
            $table->string('nha_san_xuat');
            $table->string('id_the_loai');
            $table->string('gioi_han_do_tuoi');
            $table->string('mo_ta');
            $table->string('danh_gia');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quan_ly_phims');
    }
};
