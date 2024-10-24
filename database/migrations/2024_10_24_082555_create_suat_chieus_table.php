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
        Schema::create('suat_chieus', function (Blueprint $table) {
            $table->id();
            $table->string('id_suat');
            $table->datetime('thoi_gian_bat_dau');
            $table->datetime('thoi_gian_ket_thuc');
            $table->string('id_phim');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suat_chieus');
    }
};
