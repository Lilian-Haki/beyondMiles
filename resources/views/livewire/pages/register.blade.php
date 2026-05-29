<?php

use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return view('livewire.home')
            ->layout('layouts.app');
    }
};
?>
<div>
<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;300;400;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "outline-variant": "#e2e8f0",
                    "on-tertiary-fixed": "#001e2e",
                    "inverse-on-surface": "#f8f7f5",
                    "secondary-fixed": "#e2e8f0",
                    "on-primary-container": "#221910",
                    "on-error": "#ffffff",
                    "on-background": "#0f172a",
                    "surface-container-low": "#f8f7f5",
                    "primary-container": "#f48c25",
                    "surface-container-highest": "#e2e1de",
                    "on-error-container": "#93000a",
                    "secondary-fixed-dim": "#cbd5e1",
                    "on-tertiary": "#ffffff",
                    "on-surface-variant": "#475569",
                    "surface-tint": "#f48c25",
                    "surface-container-high": "#e9e8e5",
                    "tertiary-container": "#00b1f5",
                    "surface-container": "#f1f0ee",
                    "primary-fixed": "#ffdcc3",
                    "on-primary": "#0f172a",
                    "tertiary-fixed-dim": "#84cfff",
                    "on-secondary-container": "#0f172a",
                    "primary-fixed-dim": "#ffb77d",
                    "surface": "#f8f7f5",
                    "inverse-surface": "#221910",
                    "surface-bright": "#ffffff",
                    "on-tertiary-container": "#00405c",
                    "on-secondary-fixed-variant": "#334155",
                    "on-secondary-fixed": "#0f172a",
                    "secondary-container": "#f1f5f9",
                    "surface-variant": "#f1f0ee",
                    "surface-dim": "#e9d7cb",
                    "error": "#ba1a1a",
                    "surface-container-lowest": "#ffffff",
                    "primary": "#f48c25",
                    "on-primary-fixed": "#2f1500",
                    "on-tertiary-fixed-variant": "#004c6c",
                    "inverse-primary": "#ffb77d",
                    "background": "#f8f7f5",
                    "tertiary": "#00658e",
                    "outline": "#cbd5e1",
                    "on-surface": "#0f172a",
                    "on-primary-fixed-variant": "#6e3900",
                    "on-secondary": "#ffffff",
                    "secondary": "#334155",
                    "tertiary-fixed": "#c7e7ff",
                    "error-container": "#ffdad6"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "headline": ["Lexend"],
                    "display": ["Lexend"],
                    "body": ["Lexend"],
                    "label": ["Lexend"]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Lexend', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .scrim-overlay {
            background: linear-gradient(to bottom, rgba(15, 23, 42, 0.3) 0%, rgba(15, 23, 42, 0.7) 100%);
        }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen flex flex-col">
<main class="flex-grow flex items-center justify-center sm:px-6">
<div class=" w-full grid grid-cols-1 lg:grid-cols-2 gap-0 overflow-hidden bg-surface-container-lowest">
<!-- Visual Brand Side (Rugged Editorial) -->
<div class="relative hidden lg:flex flex-col justify-end p-12 overflow-hidden bg-slate-900">
<img class="absolute inset-0 w-full h-full object-cover opacity-80" data-alt="A rugged landscape featuring a lone hiker standing on a rocky outcrop during the golden hour of a desert sunset. The warm orange light hits the jagged terrain, creating long dramatic shadows and a high-contrast atmosphere. The shot is framed like a professional outdoor editorial, capturing a sense of vast exploration and rugged high-performance gear. The lighting is rich and cinematic, perfectly aligning with the Horizon Ember design system's adventurous spirit." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqZxHhjhQXChB5-8IKDbdNfN9K1uuyBWjBG9whY61CccMU2s-9Ys1YzXXqKu7Kvj26DrxtAKOaJxWLxpJtAX7fBTe5lLSVlnWvrfgc-x8UgMChRHqDvhclwY7h7L0x8HkgOMs3mPzPCVO0UhHGZ5hxaSLQux4H81H1bpLvqX6aGO1mR5Kef6oICuR9uIhhtYac72aRSdks3szuV54kXH33VsTy-Mt71sEDd0IYJW9E11CAgnn84HDhdJ2HqQmHexEJUH5--1l5KWU"/>
<div class="absolute inset-0 scrim-overlay"></div>
<div class="relative z-10 space-y-4">
<span class="inline-block px-3 py-1 bg-primary text-on-primary text-[10px] font-black uppercase tracking-widest rounded-sm">Essential Equipment</span>
<h2 class="text-4xl md:text-5xl font-black text-white leading-tight tracking-tighter">Beyond the <span class="text-primary">Unknown.</span></h2>
<p class="text-slate-300 font-light max-w-sm">Join a community of elite explorers pushing the boundaries of what's possible in the great outdoors.</p>
</div>
</div>
<!-- Registration Form Side -->
<div class="p-8 md:p-16 flex flex-col justify-center">
<div class="mb-10">
<h1 class="text-3xl font-extrabold tracking-tighter text-on-surface mb-2">Join the Expedition</h1>
<p class="text-on-surface-variant font-light">Start your journey with Beyond Miles</p>
</div>
<form class="space-y-6" onsubmit="return false;">
<div class="space-y-1">
<label class="block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant px-1" for="full_name">Full Name</label>
<input class="w-full px-4 py-4 bg-surface-container border-none focus:ring-2 focus:ring-primary rounded-lg transition-all text-on-surface placeholder:text-slate-400" id="full_name" placeholder="Johnathan Miller" type="text"/>
</div>
<div class="space-y-1">
<label class="block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant px-1" for="email">Email Address</label>
<input class="w-full px-4 py-4 bg-surface-container border-none focus:ring-2 focus:ring-primary rounded-lg transition-all text-on-surface placeholder:text-slate-400" id="email" placeholder="explorer@beyondmiles.com" type="email"/>
</div>
<div class="space-y-1 relative">
<label class="block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant px-1" for="password">Password</label>
<input class="w-full px-4 py-4 bg-surface-container border-none focus:ring-2 focus:ring-primary rounded-lg transition-all text-on-surface placeholder:text-slate-400" id="password" placeholder="••••••••••••" type="password"/>
<button class="absolute right-4 bottom-4 text-on-surface-variant hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
</div>
<div class="flex items-center space-x-3 p-4 bg-surface-container-low rounded-lg border border-outline-variant/50">
<div class="flex items-center h-5">
<input class="h-5 w-5 rounded border-outline bg-surface focus:ring-primary text-primary transition-all" id="newsletter" name="newsletter" type="checkbox"/>
</div>
<div class="text-sm">
<label class="font-bold text-on-surface flex items-center gap-2" for="newsletter">
                                Join the Dispatch
                                <span class="bg-tertiary-container/20 text-tertiary text-[9px] px-2 py-0.5 rounded uppercase tracking-tighter">Recommended</span>
</label>
<p class="text-on-surface-variant font-light text-xs">Receive gear field tests and expedition invites weekly.</p>
</div>
</div>
<button class="w-full py-5 bg-primary text-on-primary font-black uppercase tracking-widest rounded-lg shadow-sm hover:brightness-110 active:scale-[0.98] transition-all duration-200" type="submit">
                        Create Account
                    </button>
</form>
<div class="mt-8 text-center">
<p class="text-on-surface-variant font-light text-sm">
                        Existing member? 
                        <a class="text-primary font-bold hover:underline underline-offset-4 ml-1" href="/login" wire:navigate>Login to your dashboard</a>
</p>
</div>
<div class="mt-12 pt-8 border-t border-outline-variant flex justify-center space-x-6 grayscale opacity-50">
<span class="material-symbols-outlined text-3xl">landscape</span>
<span class="material-symbols-outlined text-3xl">hiking</span>
<span class="material-symbols-outlined text-3xl">terrain</span>
</div>
</div>
</div>
</main>

<script>
        // Micro-interactions for form focus
        const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="password"]');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('label').classList.add('text-primary');
            });
            input.addEventListener('blur', () => {
                input.parentElement.querySelector('label').classList.remove('text-primary');
            });
        });

        // Simple visibility toggle for password
        const togglePass = document.querySelector('button[type="button"]');
        const passInput = document.getElementById('password');
        togglePass.addEventListener('click', () => {
            const isPassword = passInput.type === 'password';
            passInput.type = isPassword ? 'text' : 'password';
            togglePass.querySelector('span').textContent = isPassword ? 'visibility_off' : 'visibility';
        });
    </script>
</body></html>
</div>