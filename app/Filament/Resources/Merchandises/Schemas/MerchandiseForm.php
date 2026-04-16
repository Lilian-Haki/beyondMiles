<?php

namespace App\Filament\Resources\Merchandises\Schemas;

use Filament\Forms\Components as FormComponents;
use Filament\Schemas\Components;
use Filament\Schemas\Schema;

class MerchandiseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Components\Section::make('Merchandise Details')
                    ->description('Enter merchandise product information')
                    ->schema([
                        FormComponents\TextInput::make('name')
                            ->label('Product Name')
                            ->placeholder('e.g., Trail Running Shoes')
                            ->required()
                            ->maxLength(255),
                        FormComponents\Textarea::make('description')
                            ->label('Product Description')
                            ->placeholder('Describe features, materials, sizing, etc.')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        FormComponents\TextInput::make('category')
                            ->label('Category')
                            ->placeholder('e.g., Footwear, Clothing, Accessories')
                            ->required()
                            ->maxLength(255),
                        FormComponents\TextInput::make('price')
                            ->label('Product Price')
                            ->required()
                            ->numeric()
                            ->prefix('$')
                            ->minValue(0),
                        FormComponents\FileUpload::make('image')
                            ->label('Product Image')
                            ->image()
                            ->directory('merchandise')
                            ->columnSpanFull(),
                        FormComponents\TextInput::make('stock_quantity')
                            ->label('Stock Quantity')
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->minValue(0),
                        FormComponents\Toggle::make('is_active')
                            ->label('Active Product')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}
