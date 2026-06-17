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
</head>
<body class="bg-surface text-on-surface min-h-screen flex flex-col" style="font-family: 'Lexend', sans-serif;">
<main class="grow flex items-center justify-center sm:px-6 p-14">
<div class=" w-[40%] grid grid-cols-1 gap-0 overflow-hidden bg-gray-200 rounded-md shadow-sm">
<!-- Registration Form Side -->
<div class="p-28 md:p-16 flex flex-col justify-center">
<div class="mb-10">
<h1 class="text-3xl font-extrabold tracking-tighter text-on-surface mb-2">Join the Expedition</h1>
<p class="text-on-surface-variant font-light">Start your journey with Beyond Miles</p>
</div>
<form class="space-y-6" onsubmit="return false;">
<div class="space-y-1">
<label class="block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant px-1" for="full_name">Full Name</label>
<input class="w-full px-4 py-4 bg-surface-container border-none focus:ring-2 focus:ring-primary rounded-lg transition-all text-on-surface placeholder:text-slate-400" id="full_name" placeholder="Enter your full names" type="text"/>
</div>
<div class="space-y-1">
<label class="block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant px-1" for="email">Email Address</label>
<input class="w-full px-4 py-4 bg-surface-container border-none focus:ring-2 focus:ring-primary rounded-lg transition-all text-on-surface placeholder:text-slate-400" id="email" placeholder="Enter your email address" type="email"/>
</div>
<div class="space-y-1 relative">
<label class="block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant px-1" for="password">Password</label>
<input class="w-full px-4 py-4 bg-surface-container border-none focus:ring-2 focus:ring-primary rounded-lg transition-all text-on-surface placeholder:text-slate-400" id="password" placeholder="••••••••••••" type="password"/>
<button class="absolute right-4 bottom-4 text-on-surface-variant hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;">visibility</span>
</button>
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
<span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;">landscape</span>
<span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;">hiking</span>
<span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;">terrain</span>
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