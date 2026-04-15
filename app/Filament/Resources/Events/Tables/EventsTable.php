<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Actions;
use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class EventsTable
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
                        'hike' => 'success',
                        'run' => 'warning',
                        'walk' => 'info',
                    }),
                Tables\Columns\TextColumn::make('event_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'upcoming' => 'success',
                        'past' => 'gray',
                    }),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('USD')
                    ->sortable(),
                Tables\Columns\TextColumn::make('capacity')
                    ->numeric()
                    ->sortable(),
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
                        'hike' => 'Hike',
                        'run' => 'Run',
                        'walk' => 'Walk',
                    ]),
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'upcoming' => 'Upcoming',
                        'past' => 'Past',
                    ]),
                Tables\Filters\Filter::make('price_range')
                    ->form([
                        Forms\Components\TextInput::make('price_min')
                            ->numeric()
                            ->label('Min price')
                            ->prefix('$'),
                        Forms\Components\TextInput::make('price_max')
                            ->numeric()
                            ->label('Max price')
                            ->prefix('$'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['price_min'], fn ($query) => $query->where('price', '>=', $data['price_min']))
                            ->when($data['price_max'], fn ($query) => $query->where('price', '<=', $data['price_max']));
                    }),
                Tables\Filters\Filter::make('upcoming_events')
                    ->query(fn ($query) => $query->where('event_date', '>', now())),
                Tables\Filters\Filter::make('past_events')
                    ->query(fn ($query) => $query->where('event_date', '<=', now())),
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
