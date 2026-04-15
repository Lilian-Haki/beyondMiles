<?php

namespace App\Filament\Resources\Merchandises\Tables;

use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;

class MerchandisesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('USD')
                    ->sortable(),
                Tables\Columns\TextColumn::make('stock_quantity')
                    ->numeric()
                    ->sortable(),
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
                Tables\Filters\SelectFilter::make('category')
                    ->options(fn () => \App\Models\Merchandise::distinct()->pluck('category', 'category')->toArray()),
                Tables\Filters\Filter::make('active')
                    ->query(fn ($query) => $query->where('is_active', true)),
                Tables\Filters\Filter::make('inactive')
                    ->query(fn ($query) => $query->where('is_active', false)),
                Tables\Filters\Filter::make('in_stock')
                    ->query(fn ($query) => $query->where('stock_quantity', '>', 0)),
                Tables\Filters\Filter::make('out_of_stock')
                    ->query(fn ($query) => $query->where('stock_quantity', '=', 0)),
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
