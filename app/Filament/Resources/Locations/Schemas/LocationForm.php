<?php

namespace App\Filament\Resources\Locations\Schemas;

use Filament\Forms;
use Filament\Forms\Schema;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\Section::make('Location Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('address')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('latitude')
                            ->numeric()
                            ->step(0.000001),
                        Forms\Components\TextInput::make('longitude')
                            ->numeric()
                            ->step(0.000001),
                        Forms\Components\Select::make('type')
                            ->options([
                                'gym' => 'Gym',
                                'event_location' => 'Event Location',
                                'store' => 'Store',
                                'other' => 'Other',
                            ])
                            ->default('gym')
                            ->required(),
                        Forms\Components\Toggle::make('is_active')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}
