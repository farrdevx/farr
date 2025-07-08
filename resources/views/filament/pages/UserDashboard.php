<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth; // Penting: Untuk mengambil data pengguna yang sedang login
use Carbon\Carbon; // Penting: Untuk memformat tanggal (sudah terinstal otomatis dengan Laravel)

class UserDashboard extends Page
{
    // Ikon yang akan muncul di sidebar admin
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    // Nama file tampilan Blade yang akan digunakan
    protected static string $view = 'filament.pages.user-dashboard';

    // Ini agar halaman ini muncul di sidebar panel admin.
    protected static bool $shouldRegisterNavigation = true;

    // Urutan menu di sidebar (misal, setelah semua Resources)
    protected static ?int $navigationSort = 10;

    // Judul halaman yang akan tampil di browser dan di dalam dashboard
    public function getHeading(): string
    {
        return 'Dashboard Anda';
    }

    // Variabel publik ini akan menyimpan data langganan pengguna
    public $userSubscriptions;

    /**
     * Fungsi mount() akan otomatis dijalankan saat halaman dimuat.
     * Di sini kita mengambil data langganan pengguna yang sedang login.
     */
    public function mount(): void
    {
        // Mengambil semua langganan yang dimiliki oleh pengguna yang sedang login
        // Eager loading 'paket' dan 'hosting' agar datanya langsung tersedia dan tidak memicu banyak query database
        $this->userSubscriptions = Auth::user()->subscriptions()->with(['paket', 'hosting'])->get();
    }

    /**
     * Fungsi ini untuk mendefinisikan skema form jika halaman ini memiliki form.
     * Karena kita menampilkan data saja, ini bisa kosong atau dihapus.
     */
    protected function getFormSchema(): array
    {
        return [
            // Skema form kosong karena kita akan menggunakan file tampilan Blade untuk layout kustom.
        ];
    }
}
