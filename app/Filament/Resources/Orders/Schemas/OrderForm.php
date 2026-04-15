<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms;
use Filament\Forms\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\Section::make('Order Details')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->required()
                            ->searchable(),
                        Forms\Components\TextInput::make('order_number')
                            ->required()
                            ->unique(ignoreRecord: true),
                        Forms\Components\TextInput::make('total_amount')
                            ->required()
                            ->numeric()
                            ->prefix('$')
                            ->minValue(0),
                        Forms\Components\Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'paid' => 'Paid',
                                'shipped' => 'Shipped',
                                'delivered' => 'Delivered',
                                'cancelled' => 'Cancelled',
                            ])
                            ->default('pending')
                            ->required(),
                        Forms\Components\TextInput::make('payment_method'),
                        Forms\Components\Textarea::make('notes')
                            ->columnSpanFull(),
                        Forms\Components\DateTimePicker::make('paid_at'),
                    ])
                    ->columns(2),
            ]);
    }
}
