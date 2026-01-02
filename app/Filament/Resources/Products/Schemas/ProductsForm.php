<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class ProductsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            Select::make('category_id')
                ->label('Kategori')
                ->relationship('category', 'name')
                ->required(),
            TextInput::make('name')
                ->label('Nama Produk')
                ->required()
                ->maxLength(255),
            TextInput::make('description')
                ->label('Deskripsi')
                ->nullable()
                ->maxLength(65535),
            TextInput::make('price')
                ->label('Harga')
                ->required()
                ->numeric()
                ->minValue(0),
        ]);
    }
}
