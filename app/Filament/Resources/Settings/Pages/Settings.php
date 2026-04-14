<?php

namespace App\Filament\Resources\Settings\Pages;

use App\Filament\Resources\Settings\SettingsResource;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;

class Settings extends Page
{
    use InteractsWithRecord;

    protected static string $resource = SettingsResource::class;

    protected string $view = 'filament.resources.settings.pages.settings';

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }
}
