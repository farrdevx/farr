<x-filament-panels::page>
    <div class="fi-page-content-wrapper">
        <div class="fi-page-content">
            {{-- Bagian Informasi Akun Pengguna --}}
            <x-filament::card>
                <x-slot name="heading">Informasi Akun Anda</x-slot>
                <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p><strong>Nomor HP:</strong> {{ Auth::user()->nomor_hp ?? 'Belum diisi' }}</p>
            </x-filament::card>

            {{-- Bagian Daftar Langganan Pengguna --}}
            @forelse($this->userSubscriptions as $subscription)
                <x-filament::card class="mt-4">
                    <x-slot name="heading">Detail Langganan #{{ $subscription->id }}</x-slot>
                    <p><strong>Nama Paket:</strong> {{ $subscription->paket->nama_paket }}</p>
                    <p><strong>Nama Hosting:</strong> {{ $subscription->hosting->nama_hosting }}</p>
                    <p><strong>Harga Paket:</strong> Rp {{ number_format($subscription->paket->harga_paket, 0, ',', '.') }}</p>
                    <p><strong>Harga Hosting:</strong> Rp {{ number_format($subscription->hosting->harga_hosting, 0, ',', '.') }}</p>
                    <p><strong>Paket Dimulai:</strong> {{ Carbon\Carbon::parse($subscription->tanggal_mulai)->format('d F Y') }}</p>
                    <p><strong>Paket Berakhir:</strong> {{ Carbon\Carbon::parse($subscription->tanggal_berakhir)->format('d F Y') }}</p>
                    <p><strong>Status Website:</strong>
                        <span class="
                            @if($subscription->status_website == 'Aktif') text-green-600
                            @elseif($subscription->status_website == 'Nonaktif') text-red-600
                            @else text-yellow-600
                            @endif
                        ">
                            {{ $subscription->status_website }}
                        </span>
                    </p>
                    <p><strong>Link Website:</strong>
                        @if($subscription->link_website)
                            <a href="{{ $subscription->link_website }}" target="_blank" class="text-primary-600 hover:underline">{{ $subscription->link_website }}</a>
                        @else
                            Belum ada link
                        @endif
                    </p>
                </x-filament::card>
            @empty
                <x-filament::card class="mt-4">
                    <p>Anda belum memiliki langganan aktif.</p>
                </x-filament::card>
            @endforelse

            ---

            {{-- Bagian Tombol Bantuan ke WhatsApp --}}
            <div class="mt-6">
                <a href="https://wa.me/6281234567890?text=Halo%20saya%20butuh%20bantuan%20mengenai%20layanan%20Anda."
                   target="_blank"
                   class="filament-button fi-btn fi-btn-size-md fi-btn-variant-flat fi-btn-color-gray flex items-center justify-center gap-1.5 rounded-lg px-3 py-2 text-sm font-semibold outline-none transition duration-75 hover:bg-gray-50 focus:bg-gray-50 dark:hover:bg-white/5 dark:focus:bg/white/5"
                >
                    Hubungi Bantuan (WhatsApp)
                </a>
            </div>
        </div>
    </div>
</x-filament-panels::page>
