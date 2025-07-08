<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HostingResource\Pages;
use App\Filament\Resources\HostingResource\RelationManagers;
use App\Models\Hosting; // Model yang digunakan
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope; // Ini tidak digunakan, bisa dihapus

class HostingResource extends Resource
{
    protected static ?string $model = Hosting::class; // Pastikan ini mengarah ke model Hosting Anda

    // Pengaturan Navigasi di Sidebar Admin
    protected static ?string $navigationIcon = 'heroicon-o-server';
    protected static ?string $navigationLabel = 'Daftar Hosting';
    protected static ?int $navigationSort = 2; // Urutan di sidebar

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_hosting')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Hosting'),
                Forms\Components\TextInput::make('harga_hosting')
                    ->required()
                    ->numeric()
                    ->prefix('Rp')
                    ->label('Harga Hosting'),
                Forms\Components\TextInput::make('kapasitas')
                    ->required()
                    ->maxLength(255)
                    ->label('Kapasitas (contoh: 10GB SSD)'), // Contoh label lebih deskriptif
                Forms\Components\TextInput::make('bandwidth')
                    ->required()
                    ->maxLength(255)
                    ->label('Bandwidth (contoh: Unlimited)'), // Contoh label lebih deskriptif
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_hosting')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Hosting'),
                Tables\Columns\TextColumn::make('harga_hosting')
                    ->money('IDR')
                    ->sortable()
                    ->label('Harga Hosting'),
                Tables\Columns\TextColumn::make('kapasitas')
                    ->searchable()
                    ->label('Kapasitas'),
                Tables\Columns\TextColumn::make('bandwidth')
                    ->searchable()
                    ->label('Bandwidth'),
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
                // Filter tambahan bisa ditambahkan di sini
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHostings::route('/'),
            'create' => Pages\CreateHosting::route('/create'),
            'edit' => Pages\EditHosting::route('/{record}/edit'),
        ];
    }

    // Memungkinkan pencarian global
    public static function getGloballySearchableAttributes(): array
    {
        return [
            'nama_hosting',
        ];
    }
}
