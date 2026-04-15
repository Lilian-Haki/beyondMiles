<?php

namespace App\Filament\Resources\Locations\Tables;

use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class LocationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'gym' => 'success',
                        'event_location' => 'warning',
                        'store' => 'info',
                        'other' => 'gray',
                    }),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'gym' => 'Gym',
                        'event_location' => 'Event Location',
                        'store' => 'Store',
                        'other' => 'Other',
                    ]),
                Tables\Filters\Filter::make('active')
                    ->query(fn ($query) => $query->where('is_active', true)),
                Tables\Filters\Filter::make('inactive')
                    ->query(fn ($query) => $query->where('is_active', false)),
            ])
            ->actions([
                Actions\EditAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                    Actions\ForceDeleteBulkAction::make(),
                    Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }
}
