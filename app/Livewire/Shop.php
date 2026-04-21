<?php

namespace App\Livewire;

use App\Models\Merchandise;
use Livewire\Component;

class Shop extends Component
{
    public function render()
    {
        return view('livewire.pages.shop', [
            'merchandise' => Merchandise::query()
                ->where('is_active', true)
                ->orderByDesc('created_at')
                ->paginate(12),
        ]);
    }
}
