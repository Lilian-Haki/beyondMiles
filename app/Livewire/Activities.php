<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class Activities extends Component
{
    public function render()
    {
        return view('livewire.pages.activities', [
            'events' => Event::query()
                ->orderByDesc('created_at')
                ->paginate(12),
        ]);
    }
}
