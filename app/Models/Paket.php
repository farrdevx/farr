<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * Ini adalah kolom-kolom dari tabel 'pakets' yang boleh diisi.
     * Pastikan semua kolom yang kamu definisikan di migrasi 'pakets' ada di sini.
     */
    protected $fillable = [
        'nama_paket',
        'harga_paket',
        'deskripsi',
        'durasi_bulan',
    ];

    // --- Ini adalah RELASI: Bagaimana Paket terhubung dengan Langganan (Subscription) ---
    // Satu paket bisa digunakan di BANYAK langganan.
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
