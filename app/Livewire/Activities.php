<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class Activities extends Component
{
    public function render()
    {
        return view('livewire.pages.activities', [
            'upcomingEvents' => Event::query()
                ->where('status', 'upcoming')
                ->orderByDesc('created_at')
                ->paginate(12),
            'pastEvents' => Event::query()
                ->whereIn('status', ['past', 'complete'])
                ->orderByDesc('event_date')
                ->get(),
        ]);
    }
}
