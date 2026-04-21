<?php

namespace App\Livewire;

use App\Models\Location;
use Livewire\Component;

class Gym extends Component
{
    public function render()
    {
        return view('livewire.pages.gym', [
            'locations' => Location::query()
                ->where('is_active', true)
                ->orderByDesc('created_at')
                ->paginate(12),
        ]);
    }
}
