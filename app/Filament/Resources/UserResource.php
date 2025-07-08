<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User; // Pastikan ini mengarah ke Model User Anda
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash; // Penting untuk mengenkripsi password

// Penting: Import Spatie Permission untuk Roles dan Permissions
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    // Pengaturan Navigasi di Sidebar Admin Panel
    protected static ?string $navigationIcon = 'heroicon-o-users'; // Ikon untuk menu pengguna
    protected static ?string $navigationLabel = 'Manajemen Pengguna'; // Label menu di sidebar
    protected static ?int $navigationSort = 0; // Urutan paling atas, agar mudah diakses

    /**
     * Mengatur form untuk membuat atau mengedit data pengguna.
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Lengkap'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true) // Pastikan email unik, kecuali saat mengedit data yang sama
                    ->label('Alamat Email'),
                Forms\Components\TextInput::make('nomor_hp')
                    ->tel() // Validasi input sebagai nomor telepon
                    ->maxLength(255)
                    ->nullable()
                    ->label('Nomor Telepon/HP'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn (string $state): string => Hash::make($state)) // Otomatis mengenkripsi password
                    ->dehydrated(fn (?string $state): bool => filled($state)) // Hanya proses password jika tidak kosong
                    ->required(fn (string $operation): bool => $operation === 'create') // Wajib saat membuat, tidak wajib saat edit
                    ->label('Password'),

                // Pilihan Peran (Roles) dari Filament Shield/Spatie
                Select::make('roles')
                    ->multiple() // Memungkinkan memilih lebih dari satu peran
                    ->relationship('roles', 'name') // 'roles' adalah relasi di Model User, 'name' adalah kolom yang ditampilkan dari Role
                    ->preload()
                    ->searchable()
                    ->label('Peran (Roles)'),
            ]);
    }

    /**
     * Mengatur tabel untuk menampilkan daftar data pengguna.
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->label('Email'),
                Tables\Columns\TextColumn::make('nomor_hp')
                    ->label('Nomor HP')
                    ->searchable(),
                // Menampilkan peran pengguna
                TextColumn::make('roles.name')
                    ->badge() // Tampil sebagai badge
                    ->label('Peran')
                    ->colors(['primary', 'success', 'warning', 'danger']) // Warna badge acak/berbeda
                    ->searchable(), // Memungkinkan pencarian berdasarkan nama peran
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Dibuat Pada'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Diperbarui Pada'),
            ])
            ->filters([
                // Filter berdasarkan peran
                Tables\Filters\SelectFilter::make('roles')
                    ->relationship('roles', 'name')
                    ->preload()
                    ->multiple()
                    ->label('Filter Peran'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    /**
     * Mendefinisikan relasi manager.
     */
    public static function getRelations(): array
    {
        return [
            // Anda bisa menambahkan relasi manager di sini, misal untuk melihat langganan user
            // RelationManagers\SubscriptionsRelationManager::class, // Jika Anda ingin melihat langganan dari halaman edit user
        ];
    }

    /**
     * Mendefinisikan halaman-halaman yang terkait dengan resource ini.
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    /**
     * Mendefinisikan kolom yang bisa dicari secara global.
     */
    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
            'email',
            'nomor_hp',
        ];
    }
}
