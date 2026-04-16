<?php

namespace App\Filament\Resources\Locations\Schemas;

use Filament\Forms\Components as FormComponents;
use Filament\Schemas\Components;
use Filament\Schemas\Schema;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Components\Section::make('Location Details')
                    ->description('Enter location information')
                    ->schema([
                        FormComponents\TextInput::make('name')
                            ->label('Location Name')
                            ->placeholder('e.g., Downtown Gym, Central Park')
                            ->required()
                            ->maxLength(255),
                        FormComponents\Textarea::make('description')
                            ->label('Description')
                            ->placeholder('Add details about the location, facilities, etc.')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        FormComponents\TextInput::make('address')
                            ->label('Street Address')
                            ->placeholder('e.g., 123 Main St, City, State')
                            ->maxLength(255),
                        FormComponents\TextInput::make('latitude')
                            ->label('Latitude')
                            ->numeric()
                            ->step(0.000001),
                        FormComponents\TextInput::make('longitude')
                            ->label('Longitude')
                            ->numeric()
                            ->step(0.000001),
                        FormComponents\Select::make('type')
                            ->label('Location Type')
                            ->options([
                                'gym' => 'Gym',
                                'event_location' => 'Event Location',
                                'store' => 'Store',
                                'other' => 'Other',
                            ])
                            ->default('gym')
                            ->required(),
                        FormComponents\Toggle::make('is_active')
                            ->label('Active Location')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}
