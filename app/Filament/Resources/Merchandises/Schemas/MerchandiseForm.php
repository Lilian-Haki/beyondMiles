<?php

namespace App\Filament\Resources\Merchandises\Schemas;

use Filament\Forms;
use Filament\Forms\Schema;

class MerchandiseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\Section::make('Merchandise Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('category')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('$')
                            ->minValue(0),
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('merchandise')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('stock_quantity')
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->minValue(0),
                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}
