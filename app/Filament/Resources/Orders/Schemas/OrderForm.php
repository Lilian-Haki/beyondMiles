<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components as FormComponents;
use Filament\Schemas\Components;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Components\Section::make('Order Details')
                    ->description('Manage customer order information')
                    ->schema([
                        FormComponents\Select::make('user_id')
                            ->label('Customer')
                            ->relationship('user', 'name')
                            ->required()
                            ->searchable(),
                        FormComponents\TextInput::make('order_number')
                            ->label('Order Number')
                            ->placeholder('e.g., ORD-2026-001')
                            ->required()
                            ->unique(ignoreRecord: true),
                        FormComponents\TextInput::make('total_amount')
                            ->label('Total Amount')
                            ->required()
                            ->numeric()
                            ->prefix('$')
                            ->minValue(0),
                        FormComponents\Select::make('status')
                            ->label('Order Status')
                            ->options([
                                'pending' => 'Pending',
                                'paid' => 'Paid',
                                'shipped' => 'Shipped',
                                'delivered' => 'Delivered',
                                'cancelled' => 'Cancelled',
                            ])
                            ->default('pending')
                            ->required(),
                        FormComponents\TextInput::make('payment_method')
                            ->label('Payment Method')
                            ->placeholder('e.g., Credit Card, PayPal'),
                        FormComponents\Textarea::make('notes')
                            ->label('Order Notes')
                            ->placeholder('Add any special instructions or notes')
                            ->columnSpanFull(),
                        FormComponents\DateTimePicker::make('paid_at')
                            ->label('Paid Date & Time'),
                    ])
                    ->columns(2),
            ]);
    }
}
