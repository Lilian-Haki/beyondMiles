<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components as FormComponents;
use Filament\Schemas\Components;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Components\Section::make('Event Details')
                    ->description('Enter the event information below')
                    ->schema([
                        FormComponents\TextInput::make('name')
                            ->label('Event Name')
                            ->placeholder('e.g., Mountain Hike Adventure')
                            ->required()
                            ->maxLength(255),
                        FormComponents\Textarea::make('description')
                            ->label('Description')
                            ->placeholder('Describe the event details, difficulty level, what to bring, etc.')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        FormComponents\Select::make('type')
                            ->label('Activity Type')
                            ->options([
                                'hike' => 'Hike',
                                'run' => 'Run',
                                'walk' => 'Walk',
                            ])
                            ->required(),
                        FormComponents\DateTimePicker::make('event_date')
                            ->label('Event Date & Time')
                            ->required(),
                        FormComponents\Select::make('status')
                            ->label('Event Status')
                            ->options([
                                'upcoming' => 'Upcoming',
                                'past' => 'Past',
                            ])
                            ->default('upcoming')
                            ->required(),
                        FormComponents\TextInput::make('location')
                            ->label('Location')
                            ->placeholder('e.g., Rocky Mountains, Colorado')
                            ->maxLength(255),
                        FormComponents\TextInput::make('price')
                            ->label('Entry Price')
                            ->numeric()
                            ->prefix('$')
                            ->minValue(0),
                        FormComponents\TextInput::make('capacity')
                            ->label('Participant Capacity')
                            ->numeric()
                            ->minValue(0),
                        FormComponents\FileUpload::make('image')
                            ->label('Event Image')
                            ->image()
                            ->directory('events')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
