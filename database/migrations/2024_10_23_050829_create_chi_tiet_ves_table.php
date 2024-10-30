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
        Schema::create('chi_tiet_ves', function (Blueprint $table) {
            $table->id();
            $table->string('id_chi_tiet_ve');
            $table->string('id_khach_hang');
            $table->string('id_dich_vu');
            $table->string('id_suat');
            $table->string('id_ghe');
            $table->string('id_hoa_don');
            $table->string('ghi_chu') ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_ves');
    }
};
