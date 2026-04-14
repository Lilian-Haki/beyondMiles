<?php

namespace App\Filament\Resources\Members\Pages;

use App\Filament\Resources\Members\MembersResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMembers extends ViewRecord
{
    protected static string $resource = MembersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
