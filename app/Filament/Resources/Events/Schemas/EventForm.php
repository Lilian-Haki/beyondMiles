<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms;
use Filament\Forms\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\Section::make('Event Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\Select::make('type')
                            ->options([
                                'hike' => 'Hike',
                                'run' => 'Run',
                                'walk' => 'Walk',
                            ])
                            ->required(),
                        Forms\Components\DateTimePicker::make('event_date')
                            ->required(),
                        Forms\Components\Select::make('status')
                            ->options([
                                'upcoming' => 'Upcoming',
                                'past' => 'Past',
                            ])
                            ->default('upcoming')
                            ->required(),
                        Forms\Components\TextInput::make('location')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('price')
                            ->numeric()
                            ->prefix('$')
                            ->minValue(0),
                        Forms\Components\TextInput::make('capacity')
                            ->numeric()
                            ->minValue(0),
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('events')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
