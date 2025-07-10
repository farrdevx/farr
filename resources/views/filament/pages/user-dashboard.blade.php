<x-filament-panels::page>
    <div class="fi-page-content-wrapper mt-4">
        <div class="fi-page-content">
            {{-- Bagian Informasi Akun Pengguna --}}
            <x-filament::card>
                <x-slot name="heading">Informasi Akun Anda</x-slot>
                <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p><strong>Nomor HP:</strong> {{ Auth::user()->nomor_hp ?? 'Belum diisi' }}</p>
	 </x-filament::card>
		<div class="mt-6">
		</div>
            {{-- Bagian Daftar Langganan Pengguna --}}
            @forelse($this->userSubscriptions as $subscription)
		 <x-filament::card>
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
                <x-filament::card>
                    <p>Anda belum memiliki langganan aktif.</p>
                </x-filament::card>
            @endforelse
            {{-- Bagian Tombol Bantuan ke WhatsApp --}}
		<div class="mt-6">
    <a href="https://wa.me/628891983491?text=Halo%20saya%20butuh%20bantuan%20mengenai%20layanan%20Anda."
       target="_blank"
       class="filament-button fi-btn fi-btn-size-md inline-flex items-center justify-center gap-1.5 rounded-lg px-3 py-2 font-semibold text-white shadow-sm transition-colors duration-75"
       style="background-color: #25D366; hover:background-color: #1DA851;">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
            <path fill="currentColor" d="M19.05 4.94A9.96 9.96 0 0 0 12 2C6.48 2 2 6.48 2 12c0 1.77.46 3.45 1.27 4.94L2 22l5.06-1.27c1.49.81 3.16 1.27 4.94 1.27h.01c5.52 0 10-4.48 10-10c0-2.76-1.12-5.26-2.95-7.06zm-7.06 15.02c-1.66 0-3.26-.5-4.63-1.39L6 19.34l.71-4.52a8.04 8.04 0 0 1-1.27-4.83c0-4.42 3.58-8 8-8s8 3.58 8 8c0 4.42-3.58 8-8 8zm4.49-6.17c-.28-.14-1.64-.81-1.9-.9c-.26-.1-.45-.14-.64.14s-.72.9-.88 1.08c-.16.18-.32.2-.59.06c-1.11-.56-2.08-1.25-2.88-2.14c-.62-.7-.93-1.38-.79-1.63c.12-.2.27-.34.4-.46c.12-.1.2-.2.3-.34c.1-.14.05-.28-.02-.42c-.07-.14-.64-1.53-.87-2.1c-.24-.56-.48-.48-.64-.48c-.15 0-.33-.05-.51-.05c-.18 0-.48.07-.73.35c-.25.28-.96.93-.96 2.25c0 1.32.99 2.6 1.13 2.78c.14.18 1.95 3.01 4.73 4.19c.68.29 1.22.46 1.63.59c.65.2 1.23.18 1.69.11c.5-.07 1.64-.67 1.87-1.32c.23-.65.23-1.2.16-1.32c-.07-.12-.26-.2-.54-.34z"/>
        </svg>

        <span>
            Hubungi via WhatsApp
        </span>
    </a>
</div>
        </div>
    </div>
</x-filament-panels::page>
