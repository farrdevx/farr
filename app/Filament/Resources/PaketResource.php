<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketResource\Pages;
use App\Filament\Resources\PaketResource\RelationManagers;
use App\Models\Paket; // Model yang digunakan
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput\Mask; // Tambahkan baris ini
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope; // Ini tidak digunakan, bisa dihapus jika tidak ada soft delete

class PaketResource extends Resource
{
    protected static ?string $model = Paket::class; // Pastikan ini mengarah ke model Paket Anda

    // Pengaturan Navigasi di Sidebar Admin
    protected static ?string $navigationIcon = 'heroicon-o-archive-box';
    protected static ?string $navigationLabel = 'Daftar Paket';
    protected static ?int $navigationSort = 1; // Urutan di sidebar

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_paket')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Paket'), // Label di form
                Forms\Components\TextInput::make('harga_paket')
                    ->required()
                    ->numeric()
                    ->prefix('Rp') // Menambahkan 'Rp' di depan input
                    ->label('Harga Paket'),
                Forms\Components\Textarea::make('deskripsi')
                    ->maxLength(65535) // Kapasitas maksimum untuk teks panjang
                    ->nullable() // Boleh kosong
                    ->columnSpanFull() // Mengambil lebar penuh di layout form
                    ->label('Deskripsi Paket'),
                Forms\Components\TextInput::make('durasi_bulan')
                    ->required()
                    ->numeric()
                    ->suffix('bulan') // Menambahkan 'bulan' di belakang input
                    ->label('Durasi Paket (Bulan)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_paket')
                    ->searchable() // Kolom bisa dicari
                    ->sortable() // Kolom bisa diurutkan
                    ->label('Nama Paket'), // Label di tabel
                Tables\Columns\TextColumn::make('harga_paket')
                    ->money('IDR') // Format mata uang Rupiah
                    ->sortable()
                    ->label('Harga Paket'),
                Tables\Columns\TextColumn::make('durasi_bulan')
                    ->label('Durasi (Bulan)')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime() // Menampilkan sebagai tanggal dan waktu
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true) // Sembunyi default, bisa ditampilkan
                    ->label('Dibuat Pada'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Diperbarui Pada'),
            ])
            ->filters([
                // Filter tambahan bisa ditambahkan di sini
            ])
            ->actions([
                Tables\Actions\EditAction::make(), // Tombol untuk mengedit
                Tables\Actions\DeleteAction::make(), // Tombol untuk menghapus
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(), // Opsi hapus banyak data terpilih
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Relation managers (misal: daftar langganan yang pakai paket ini) bisa ditambahkan di sini
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPakets::route('/'),
            'create' => Pages\CreatePaket::route('/create'),
            'edit' => Pages\EditPaket::route('/{record}/edit'),
        ];
    }

    // Memungkinkan pencarian global dari search bar utama Filament
    public static function getGloballySearchableAttributes(): array
    {
        return [
            'nama_paket',
        ];
    }
}
