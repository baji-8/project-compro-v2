<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery; 
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';

    protected static ?string $navigationLabel = 'Gallery';

    protected static ?string $pluralLabel = 'Gallery Dokumentasi';

    // Ini yang akan mengubah URL menjadi /admin/galleries
    protected static ?string $slug = 'galleries';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Menggunakan Card agar tampilan input lebih rapi di MacBook kamu
                Forms\Components\Section::make('Informasi Foto')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Foto')
                            ->placeholder('Masukkan judul dokumentasi...')
                            ->required(),
                        Textarea::make('description')
                            ->label('Keterangan')
                            ->placeholder('Jelaskan detail pekerjaan...')
                            ->required(),
                        FileUpload::make('image')
                            ->label('Upload Gambar')
                            ->image()
                            ->directory('gallery') // File akan masuk ke storage/app/public/gallery
                            ->preserveFilenames()
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto')
                    ->disk('public') // Pastikan menunjuk ke disk public
                    ->square(),
                TextColumn::make('title')
                    ->label('Judul')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(30),
            ])
            ->filters([
                //
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGallery::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}   