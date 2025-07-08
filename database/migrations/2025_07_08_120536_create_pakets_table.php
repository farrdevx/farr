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
    Schema::create('pakets', function (Blueprint $table) {
        $table->id();
        $table->string('nama_paket');
        $table->decimal('harga_paket', 10, 2); // 10 digit total, 2 di belakang koma
        $table->text('deskripsi')->nullable(); // Boleh kosong
        $table->integer('durasi_bulan');
        $table->timestamps(); // Ini otomatis membuat created_at dan updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
