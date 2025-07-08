<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * Ini adalah kolom-kolom dari tabel 'hostings' yang boleh diisi.
     * Pastikan semua kolom yang kamu definisikan di migrasi 'hostings' ada di sini.
     */
    protected $fillable = [
        'nama_hosting',
        'harga_hosting',
        'kapasitas',
        'bandwidth',
    ];

    // --- Ini adalah RELASI: Bagaimana Hosting terhubung dengan Langganan (Subscription) ---
    // Satu hosting bisa digunakan di BANYAK langganan.
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
