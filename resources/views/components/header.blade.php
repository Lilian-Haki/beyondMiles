<?php

use Livewire\Component;

// use App\Models\Project;
// use App\Models\Category;
// use App\Models\Service;

// new class extends Component {
//     public array $projects;
//     public array $categories;
//     public array $services;

//     public function mount()
//     {
//         $this->projects   = Project::latest()->take(3)->get()->toArray();
//         $this->categories = Category::latest()->take(6)->get()->toArray();
//         $this->services   = Service::latest()->take(6)->get()->toArray();
//     }
// };
?>
<header class="sticky top-0 z-50 w-full bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800">
<div class="max-w-7xl mx-auto px-6 lg:px-10 py-4 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-4xl" data-icon="explore">explore</span>
</div>
<a href="/" wire:navigate><h1 class="text-xl font-bold tracking-tight text-slate-900 dark:text-slate-100">Beyond Miles</h1></a>
</div>
<nav class="hidden md:flex items-center gap-10">
<a class="text-sm font-semibold hover:text-primary transition-colors" href="/activities" wire:navigate>Activities</a>
<a class="text-sm font-semibold hover:text-primary transition-colors" href="/gym" wire:navigate>Gym</a>
<a class="text-sm font-semibold hover:text-primary transition-colors" href="/shop" wire:navigate>Shop</a>
<a class="text-sm font-semibold hover:text-primary transition-colors" href="https://wa.me/254757151520" target="_blank">Community</a>
</nav>
<div class="flex items-center gap-4">
<button class="px-6 py-2 rounded-lg bg-primary text-slate-900 font-bold text-sm hover:opacity-90 transition-opacity">
                        DOWNLOAD APP
                    </button>
<button class="md:hidden text-slate-900 dark:text-slate-100">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</div>
</header>
