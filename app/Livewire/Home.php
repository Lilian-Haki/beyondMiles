<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Location;
use App\Models\Merchandise;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home', [
            'featuredEvents' => Event::query()
                ->where('status', 'upcoming')
                ->orderBy('event_date')
                ->limit(3)
                ->get(),
            'featuredMerchandise' => Merchandise::query()
                ->where('is_active', true)
                ->orderByDesc('created_at')
                ->limit(4)
                ->get(),
            'featuredLocations' => Location::query()
                ->where('is_active', true)
                ->orderByDesc('created_at')
                ->limit(3)
                ->get(),
        ]);
    }
}
