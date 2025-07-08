<?php

namespace App\Models; // Pastikan namespace ini benar (App\Models)

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Pastikan Model-model yang berelasi di-import dengan benar
use App\Models\User;   // <--- PASTIKAN ADA INI
use App\Models\Paket;  // <--- PASTIKAN ADA INI
use App\Models\Hosting; // <--- PASTIKAN ADA INI

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'paket_id',
        'hosting_id',
        'tanggal_mulai',
        'tanggal_berakhir',
        'status_website',
        'link_website',
    ];

    // --- Definisi Relasi ---

    // Relasi ke User
    public function user()
    {
        // Pastikan Anda memanggil Model User dengan namespace lengkap atau di-import
        return $this->belongsTo(User::class);
    }

    // Relasi ke Paket
    public function paket()
    {
        // Pastikan Anda memanggil Model Paket dengan namespace lengkap atau di-import
        return $this->belongsTo(Paket::class);
    }

    // Relasi ke Hosting
    public function hosting()
    {
        // Pastikan Anda memanggil Model Hosting dengan namespace lengkap atau di-import
        return $this->belongsTo(Hosting::class);
    }
}
