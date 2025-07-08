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
    Schema::create('hostings', function (Blueprint $table) {
        $table->id();
        $table->string('nama_hosting');
        $table->decimal('harga_hosting', 10, 2);
        $table->string('kapasitas');
        $table->string('bandwidth');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostings');
    }
};
