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
<title>Login | Beyond Miles</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;300;400;500;700;800;900&amp;display=swap" rel="stylesheet"/>
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
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
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
<body class="bg-surface text-on-surface min-h-screen" style="font-family: 'Lexend', sans-serif;">
<!-- TopAppBar Suppressed for Transactional Page as per Shell Visibility Rules -->
<main class="grid grid-cols-1 h-screen w-full">
<!-- Minimalist Login Form -->
<section class="flex items-center justify-center p-8 md:p-16 lg:p-24 bg-surface-container-low">
<div class="bg-gray-200 w-[40%] space-y-12 rounded-md shadow-sm p-10">
<!-- <div class=" w-[40%] grid grid-cols-1 gap-0 overflow-hidden "> -->

<!-- Form Header -->
<div class="space-y-4">
<h2 class="text-3xl font-extrabold text-on-surface leading-tight">Welcome back, Explorer</h2>
<p class="text-on-surface-variant font-light">Log in to your account to continue your expedition.</p>
</div>
<!-- Login Form -->
<form class="space-y-6" onsubmit="return false;">
<div class="space-y-4">
<div class="relative group">
<label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-1 ml-1" for="email">Email Address</label>
<input class="w-full px-4 py-4 bg-surface-container-highest border-none rounded-xl text-on-surface focus:ring-2 focus:ring-primary transition-all duration-200" id="email" onblur="this.style.boxShadow='none'; this.style.borderColor='';" onfocus="this.style.boxShadow='none'; this.style.borderColor='#f48c25';" placeholder="enter your email address" type="email"/>
</div>
<div class="relative group">
<div class="flex justify-between items-end mb-1">
<label class="block text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1" for="password">Password</label>
<a class="text-xs font-bold text-primary hover:underline transition-all" href="#">Forgot password?</a>
</div>
<input class="w-full px-4 py-4 bg-surface-container-highest border-none rounded-xl text-on-surface focus:ring-2 focus:ring-primary transition-all duration-200" id="password" onblur="this.style.boxShadow='none'; this.style.borderColor='';" onfocus="this.style.boxShadow='none'; this.style.borderColor='#f48c25';" placeholder="••••••••" type="password"/>
</div>
</div>
<div class="flex items-center space-x-3 py-2">
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary transition-all cursor-pointer" id="remember" type="checkbox"/>
<label class="text-sm text-on-surface-variant cursor-pointer select-none" for="remember">Remember me</label>
</div>
<button class="w-full py-4 bg-primary text-on-primary font-bold text-lg rounded-xl shadow-sm hover:shadow-md active:scale-[0.98] transition-all duration-200 flex items-center justify-center space-x-2">
<span>Sign In</span>
<span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;">north_east</span>
</button>
</form>
<!-- Divider -->
<div class="relative flex items-center py-4">
<div class="flex-grow border-t border-outline-variant"></div>
<span class="flex-shrink mx-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest">Or continue with</span>
<div class="flex-grow border-t border-outline-variant"></div>
</div>
<!-- Social Logins -->
<div class="grid grid-cols-2 gap-4">
<button class="flex items-center justify-center space-x-3 py-3 px-4 border border-outline-variant rounded-xl hover:bg-surface-container-high transition-all duration-200 group">
<svg class="w-5 h-5" viewbox="0 0 24 24">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.26.81-.58z" fill="#FBBC05"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
</svg>
<span class="font-bold text-sm">Google</span>
</button>
<button class="flex items-center justify-center space-x-3 py-3 px-4 border border-outline-variant rounded-xl hover:bg-surface-container-high transition-all duration-200 group">
<svg class="w-5 h-5 fill-on-surface" viewbox="0 0 24 24">
<path d="M17.05 20.28c-.98.95-2.05 1.61-3.21 1.61-1.11 0-1.5-.68-2.84-.68-1.33 0-1.78.65-2.84.68-1.11 0-2.25-.68-3.32-1.68C2.65 18.23 1 15.34 1 12.3c0-3.08 2.01-4.7 3.97-4.7 1.04 0 1.9.68 2.53.68.61 0 1.65-.74 2.84-.74 1.25 0 2.3.56 2.99 1.55-2.66 1.45-2.21 5.31.52 6.55-.58 1.48-1.36 2.96-2.8 4.74zM12.03 7.25c-.02-2.19 1.81-4.05 3.97-4.14.23 2.57-2.68 4.49-3.97 4.14z"></path>
</svg>
<span class="font-bold text-sm">Apple</span>
</button>
</div>
<!-- Footer Text -->
<p class="text-center text-sm text-on-surface-variant">
                    Don't have an account? 
                    <a class="text-primary font-bold hover:underline" href="/register" wire:navigate>Join the expedition</a>
</p>
</div>
</section>
</main>

<script>
        // Micro-interaction: Input field focus effects
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('label')?.classList.add('text-primary');
            });
            input.addEventListener('blur', () => {
                input.parentElement.querySelector('label')?.classList.remove('text-primary');
            });
        });
    </script>
</body></html>
</div>