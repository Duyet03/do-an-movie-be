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
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('id_khach_hang');
            $table->string('ten_khach_hang');
            $table->string('email');
            $table->string('password');
            $table->string('hash_reset');
            $table->string('is_block');
            $table->string('is_active');
            $table->integer('tinh_trang');
            $table->string('id_chuc_nang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
