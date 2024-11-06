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
        Schema::create('ghes', function (Blueprint $table) {
            $table->id();
            $table->string('ten_ghe');
            $table->string('loai_ghe');
            $table->integer('trang_thai');
            $table->string('id_phong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ghes');
    }
};
