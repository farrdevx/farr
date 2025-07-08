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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            // Foreign Keys (kunci asing) untuk menghubungkan ke tabel lain
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Terhubung ke tabel users
            $table->foreignId('paket_id')->constrained()->onDelete('cascade'); // Terhubung ke tabel pakets
            $table->foreignId('hosting_id')->constrained()->onDelete('cascade'); // Terhubung ke tabel hostings

            $table->date('tanggal_mulai'); // Tanggal mulai langganan
            $table->date('tanggal_berakhir'); // Tanggal berakhir langganan
            $table->string('status_website'); // Status website, misal 'Aktif', 'Nonaktif', 'Dalam Review'
            $table->string('link_website')->nullable(); // Link website, boleh kosong
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
