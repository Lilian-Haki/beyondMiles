<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                "outline": "#cbd5e1",
                "surface-container-high": "#e9e8e5",
                "on-primary-container": "#221910",
                "on-tertiary-container": "#00405c",
                "primary": "#f48c25",
                "primary-fixed-dim": "#ffb77d",
                "tertiary": "#00658e",
                "surface-container-lowest": "#ffffff",
                "secondary-container": "#f1f5f9",
                "surface-tint": "#f48c25",
                "on-background": "#0f172a",
                "surface-dim": "#e9d7cb",
                "on-secondary-fixed-variant": "#334155",
                "on-tertiary-fixed-variant": "#004c6c",
                "on-secondary": "#ffffff",
                "tertiary-fixed-dim": "#84cfff",
                "surface-container-highest": "#e2e1de",
                "on-secondary-container": "#0f172a",
                "secondary-fixed-dim": "#cbd5e1",
                "inverse-primary": "#ffb77d",
                "on-error": "#ffffff",
                "tertiary-container": "#00b1f5",
                "on-primary-fixed": "#2f1500",
                "on-secondary-fixed": "#0f172a",
                "surface-container-low": "#f8f7f5",
                "on-tertiary": "#ffffff",
                "secondary": "#334155",
                "on-surface": "#0f172a",
                "on-tertiary-fixed": "#001e2e",
                "error": "#ba1a1a",
                "error-container": "#ffdad6",
                "surface": "#f8f7f5",
                "surface-bright": "#ffffff",
                "on-primary": "#0f172a",
                "outline-variant": "#e2e8f0",
                "on-primary-fixed-variant": "#6e3900",
                "surface-variant": "#f1f0ee",
                "primary-container": "#f48c25",
                "on-error-container": "#93000a",
                "background": "#f8f7f5",
                "on-surface-variant": "#475569",
                "primary-fixed": "#ffdcc3",
                "inverse-on-surface": "#f8f7f5",
                "secondary-fixed": "#e2e8f0",
                "inverse-surface": "#221910",
                "surface-container": "#f1f0ee",
                "tertiary-fixed": "#c7e7ff"
              },
              "borderRadius": {
                "DEFAULT": "0.125rem",
                "lg": "0.25rem",
                "xl": "0.5rem",
                "full": "0.75rem"
              },
              "fontFamily": {
                "headline": ["Lexend"],
                "body": ["Lexend"],
                "label": ["Lexend"]
              }
            },
          },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .scrim-bottom {
            background: linear-gradient(to top, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0) 100%);
        }
        .scrim-hero {
            background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.6) 100%);
        }
    </style>
    <title>Shop | Beyond Miles Adventure</title>
</head>
<body class="bg-background dark:bg-inverse-surface font-body text-on-background dark:text-inverse-on-surface">
    <section class="py-24 px-6 lg:px-10 max-w-7xl mx-auto w-full">
        <div class="mb-12">
            <h1 class="text-4xl font-headline font-extrabold mb-4 text-on-background dark:text-inverse-on-surface">Our Gear & Merchandise</h1>
            <p class="text-lg text-on-surface-variant dark:text-slate-400">Premium equipment for your adventures</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($merchandise as $item)
<div class="bg-white dark:bg-background-dark rounded-xl overflow-hidden shadow-sm  border-slate-200 dark:border-slate-800 flex flex-col">
<div class=" bg-slate-200 overflow-hidden">
<img alt="Smart Watch" class="w-full h-full object-cover" data-alt="White minimalist adventure smartwatch" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcr8JZSLI_TAem5Sbsr-1KwuTsU2sSGs271oCTExz_XaE_Q8p9LmgRVqVM07oaa8Wt_cfUqAGOWKLlfOr0h3D7m6qGal5PpvHfI99_MgjGpyy4Q3NWBJ0A5sIemoC0EjuSeuFCGdKMJtSkGzm8T-uut2379W36UtIR_eNQbwc5SuOelMhIuj4c2tdSahF2e5DVH69cpBRdT9EM1FfAKkNCzAwqSVjIJizIBvh10BojtIAyqqPnIXKRd8CXF6HRIPeS13mzJrs4yVo"/>
 @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-secondary to-secondary-container flex items-center justify-center">
                                        <svg class="w-12 h-12 text-on-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                        </svg>
                                    </div>
                                @endif
</div>
<div class="p-6">
<span class="text-xs font-bold text-primary uppercase tracking-wider">{{ ucfirst($item->category) }}</span>
<h4 class="text-lg font-bold mt-1">{{ $item->name }}</h4>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-2">{{ $item->description }}</p>
<div class="flex items-end justify-between pt-4 border-t border-outline-variant dark:border-slate-800 mt-auto">
                            <div>
                                <p class="text-2xl font-headline font-bold text-primary">${{ number_format($item->price, 2) }}</p>
                                <p class="text-xs text-on-surface-variant dark:text-slate-400">{{ $item->stock_quantity > 0 ? $item->stock_quantity . ' in stock' : 'Out of stock' }}</p>
                            </div>
                            <button class="p-2 rounded-lg {{ $item->stock > 0 ? 'bg-primary text-on-primary hover:bg-primary-fixed-dim' : 'bg-surface-container-high text-on-surface-variant cursor-not-allowed' }} transition-colors" {{ $item->stock <= 0 ? 'disabled' : '' }}>
                                <span class="material-symbols-outlined text-base">shopping_cart</span>
                            </button>
                        </div>
</div>
</div>

            @empty
                <div class="col-span-full text-center py-16">
                    <p class="text-xl text-on-surface-variant dark:text-slate-400">No merchandise available at this time.</p>
                </div>
            @endforelse
        </div>

        @if($merchandise->hasPages())
            <div class="mt-12">
                {{ $merchandise->links() }}
            </div>
        @endif
    </section>
</body>
</html>
