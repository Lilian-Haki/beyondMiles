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
    <title>Activities | Beyond Miles Adventure</title>
</head>
<body class="bg-background dark:bg-inverse-surface font-body text-on-background dark:text-inverse-on-surface">
<div>  
    <!-- Hero Section -->
<section class="relative h-[314px] w-full overflow-hidden mb-24">
<div class="absolute inset-0 bg-slate-900">
<img class="w-full h-full object-cover opacity-70" data-alt="cinematic wide shot of jagged mountain peaks at dawn with mist swirling in the valleys and golden sunlight hitting the summits" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDP_Ky6HSABYa1tRMzQIdRP-j8FMBvRGXDjVzeN01zFph9qyUXEx9tk38xVYYRNJRDtryxDbbX87gB4bRRd6R4fcXIkF6GI-cKdRwGUsfds8AhJx0P7BSBOFA2yxyHl6BKXrVAxvWtbIHYOz41c4Y2ukEjKg7PKfuPxhKgAfyBjxlDVt3Rqxb-fSHpZbXuYiyPIjmCL_MehioTKRMLh_giOXGZtnuQ0b2bEE0q_M_8Yf7oEeKsfks4yxSwhsVJWpoOWuoCpVbRE13s"/>
</div>
<div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
</section>  
<section class="px-12 max-w-8xl mx-auto mb-32">
    <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
        <div>
<h2 class="text-4xl font-black uppercase tracking-tight text-on-surface">Upcoming Activities</h2>
<p class="text-on-surface-variant mt-2">Secure your spot on our next seasonal deployments.</p>
</div>
<div class="h-px flex-grow bg-outline-variant mx-12 hidden md:block mb-4"></div>
<div class="flex gap-4">
<button class="p-3 bg-surface-container hover:bg-primary hover:text-white transition-colors rounded-lg"><span class="material-symbols-outlined">chevron_left</span></button>
<button class="p-3 bg-surface-container hover:bg-primary hover:text-white transition-colors rounded-lg"><span class="material-symbols-outlined">chevron_right</span></button>
</div>
</div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($events as $event)
                <div class="rounded-xl overflow-hidden border border-outline-variant dark:border-slate-800 shadow-sm hover:shadow-lg transition-shadow duration-300 bg-surface-container-low dark:bg-surface-container-high">
                    <div class="h-48 bg-surface-container-high overflow-hidden">
                        <img src="{{ $event->image ? asset('storage/' . $event->image) : 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80' }}"
                             alt="{{ $event->name }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"/>
                    </div>
                    <div class="p-6 bg-surface dark:bg-surface-container">
                        <div class="flex items-center justify-between mb-2">
                            <span class="inline-block px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container text-xs font-label font-semibold">{{ ucfirst($event->type) }}</span>
                            <span class="text-xs font-label font-bold px-2 py-1 rounded {{ $event->status === 'upcoming' ? 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300' : 'bg-surface-container-high text-on-surface-variant' }}">
                                {{ ucfirst($event->status) }}
                            </span>
                        </div>
                        <h3 class="text-xl font-headline font-bold mb-2 text-on-surface dark:text-on-background">{{ $event->name }}</h3>
                        <p class="text-on-surface-variant dark:text-slate-400 text-sm mb-4">{{ Str::limit($event->description, 100) }}</p>

                        <div class="space-y-2 text-sm text-on-surface-variant dark:text-slate-400 mb-4">
                            <p><strong>Date:</strong> {{ $event->event_date?->format('M d, Y') ?? 'TBD' }}</p>
                            <p><strong>Location:</strong> {{ $event->location ?: 'TBD' }}</p>
                            <p><strong>Capacity:</strong> {{ $event->capacity }} participants</p>
                        </div>

                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant dark:border-slate-800">
                            <span class="text-lg font-headline font-bold text-primary">{{ $event->price > 0 ? '$' . number_format($event->price, 2) : 'Free' }}</span>
                            <button class="px-4 py-2 rounded-lg bg-primary text-on-primary hover:bg-primary-fixed-dim font-semibold transition-colors">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <p class="text-xl text-on-surface-variant dark:text-slate-400">No activities available at this time.</p>
                </div>
            @endforelse
            <!-- Activity Card 1 -->
<div class="group relative bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:scale-[1.02] transition-all duration-500">
<div class="aspect-[4/5] relative overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Hiker with heavy backpack ascending a steep rocky ridge under a dramatic cloudy sky" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQo4UjyinvZfH8POzbLC_uBaCj3C2fRt6XT1mTdDQEbF6tSILhbF9jHQnmHtH8S_1xjDp5LGGfMQzo-Lk83_DrTjGWUJXf_Kc2woLv3aNZDTucREygBFbSup_7MgcL666UzXqNBQ7WJpuHSgtRBll8HunKbk2KdhMWXhDpSxtgJY4NNRpAEpXBJDPnJi81RhQih3mK8tygXjYHi7L3puearh_CY3GslI31QPyEMxTlBTYqqIReXbsL8bUuNNX_s4X-eZPGuu1ebDc"/>
<div class="scrim-bottom absolute inset-0 flex flex-col justify-end p-6">
<div class="flex justify-between items-end">
<div>
<span class="text-primary text-[10px] font-black uppercase tracking-widest mb-1 block">Summit Pursuit</span>
<h3 class="text-white text-2xl font-extrabold uppercase">Echo Ridge Ascent</h3>
</div>
</div>
</div>
</div>
<div class="p-6 grid grid-cols-3 gap-4 border-t border-outline-variant/30">
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-on-surface-variant tracking-wider">Date</span>
<span class="text-sm font-black">OCT 14</span>
</div>
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-on-surface-variant tracking-wider">Dist</span>
<span class="text-sm font-black">12.4KM</span>
</div>
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-on-surface-variant tracking-wider">Diff</span>
<span class="text-sm font-black text-primary">HARD</span>
</div>
</div>
</div>
        </div>

        @if($events->hasPages())
            <div class="mt-12">
                {{ $events->links() }}
            </div>
        @endif
    </section>
    <!-- Stats Counter Section (Editorial Interlude) -->
<section class="bg-slate-900 py-24 mb-32">
<div class="px-12 max-w-8xl mx-auto flex flex-wrap gap-12 md:gap-24">
<div class="flex-1 min-w-[200px]">
<span class="text-primary font-black text-6xl block mb-2">42</span>
<span class="text-white font-bold uppercase tracking-widest text-xs">Summits Conquered</span>
</div>
<div class="flex-1 min-w-[200px]">
<span class="text-primary font-black text-6xl block mb-2">850</span>
<span class="text-white font-bold uppercase tracking-widest text-xs">Miles Traversed</span>
</div>
<div class="flex-1 min-w-[200px]">
<span class="text-primary font-black text-6xl block mb-2">15k</span>
<span class="text-white font-bold uppercase tracking-widest text-xs">Active Community</span>
</div>
<div class="flex-1 min-w-[200px]">
<span class="text-primary font-black text-6xl block mb-2">100%</span>
<span class="text-white font-bold uppercase tracking-widest text-xs">Rugged Reliability</span>
</div>
</div>
</section>
<!-- Past Adventures - Bento Gallery -->
<section class="px-12 max-w-8xl mx-auto mb-32">
<div class="mb-16">
<h2 class="text-4xl font-black uppercase tracking-tight text-on-surface">Past Adventures</h2>
<p class="text-on-surface-variant mt-2 max-w-xl">A visual archive of the landscapes we've explored and the challenges we've overcome together.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 h-[1000px] md:h-[700px]">
<div class="md:col-span-2 md:row-span-2 relative overflow-hidden group rounded-xl">
<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" data-alt="Person standing on a high cliff edge looking out over a vast forest valley with distant mountains" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQE4LYo9RTzpDX-Ywwk4mjzoDsCkltbwZMEG-wOMMisqWSJaO_Zz78uclmqp7QLNduiV_AgOslrx-I-0xZhiFfaBxamYQkwdBypcpyYi_s6yK87dCF0ziQlq0ficmO88uFJEfwe7lXu0cYzgL6xpS3yEJG2qePienNng5uxywWMe7hyCAJqQ1sU-2tfGdaJeCuCEx_vQl0CLIXSIQqLO9hsitFSsoZCZOpzUswaKP5PVzt7gcrMSEdYj0gKKNxcbfn_8K2V-z3fpA"/>
<div class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/10 transition-colors"></div>
<div class="absolute bottom-8 left-8">
<span class="bg-white px-3 py-1 text-[10px] font-black uppercase mb-3 inline-block">EXPEDITION 001</span>
<h4 class="text-white text-3xl font-black uppercase">Copper Canyon</h4>
</div>
</div>
<div class="md:col-span-1 relative overflow-hidden group rounded-xl">
<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" data-alt="Detail shot of weathered leather hiking boots on a dusty desert trail" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4kA4kmVZlijn-3YzskcJGPI-4FLM59aNPMHAmBKZY4Xp_loTLVFYAXTEdDlOxzV2IfBxZYde4Nd7OGvGJTpWJI_jUbsSuWG3fHXQjBNM5Ci5k6VBJSUyVVCthYJwXhWeLV4dCaQBTv8A1ifZvdCiPMkUn9teTgyetf0ScDAMZN--7V4PDRevzUyFDKUFjPFR0MJvlwx9qnxXXuOMQA2ZBxtgdysQ_XDxPJ825qcOpeBC41bF7YrffptlRyBeOFeUXDTXr0NtNXWU"/>
<div class="absolute inset-0 bg-slate-900/20"></div>
<div class="absolute top-6 left-6 right-6">
<h4 class="text-white text-lg font-black uppercase leading-tight">Dust &amp; Granite</h4>
</div>
</div>
<div class="md:col-span-1 md:row-span-2 relative overflow-hidden group rounded-xl">
<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" data-alt="Campsite with small tent at the foot of massive snowy peaks under a starry night sky" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8MKtd_KeOyaXEfDpEnp0eHe2jI1yeCXdbaZQacWC02a1Y2nQdghOvdOu0Ki5__HOJ7hnUPIWYP9AVhnQ63Nsvrhjf3XeYC7OS8FC40retYR5lw21sRaiXpYtUP_adx-h9uh6bdjsB7pcBcLUF9As4WHl83l5hIBzKbu4cdk6_QeW4nqLRmuHUmzRE0pudIHc4lzeFyFxEfH8ngktvaBb8Am7DiAKCnnK-uRP2WmUaDE3oKMJqJDkwlS0InBo5AUioNxs1DLiv4Es"/>
<div class="absolute inset-0 bg-slate-900/30"></div>
<div class="absolute bottom-6 left-6">
<h4 class="text-white text-xl font-black uppercase">Star-Lit Base</h4>
</div>
</div>
<div class="md:col-span-1 relative overflow-hidden group rounded-xl">
<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" data-alt="Rushing mountain stream with crystal clear water flowing over smooth dark river stones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuChlJb7sGLplY5KGRcKmc8rsL-ZH88yz6UTFR9vpt1i0A4kpj0FRe4jBFzmbHZ-55XqwOeemI6YTh8D2vzGrOSLqhkfq_LJtkLYzO59LASQGgv8a1H7IDDJbIr2H7eoZpdXnvnkSIWznLOUp_RDep7fvM9acN0RIGMJeyc_wENxWGa4tlaGeMT-JLzBrpPg03Ao5yxwwI6PMBEwfNRnVfE0vn3aht8LOuqgpOoyVetGc7A-PW_G0Ppb0Jopz19nCtb03wjdq_VGypk"/>
<div class="absolute inset-0 bg-slate-900/20"></div>
<div class="absolute top-6 left-6">
<h4 class="text-white text-lg font-black uppercase">Pure Current</h4>
</div>
</div>
</div>
</section>

<!-- Newsletter CTA -->
<section class="px-12 max-w-8xl mx-auto mb-32">
<div class="bg-surface-container-high rounded-xl p-12 md:p-24 flex flex-col md:flex-row items-center gap-12 relative overflow-hidden">
<div class="absolute -right-24 top-0 opacity-10 pointer-events-none select-none">
<span class="text-[20rem] font-black uppercase leading-none tracking-tighter">BEYOND</span>
</div>
<div class="flex-1 relative z-10">
<h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter mb-6">Join the Dispatch</h2>
<p class="text-on-surface-variant max-w-md">Get exclusive early access to expedition bookings, gear reviews, and survival guides delivered twice a month.</p>
</div>
<div class="w-full md:w-auto relative z-10">
<form class="flex flex-col md:flex-row gap-4">
<input class="bg-surface-bright border-none px-6 py-4 rounded-lg focus:ring-2 focus:ring-primary w-full md:w-80 font-bold uppercase text-xs tracking-widest" placeholder="Your rugged email" type="email"/>
<button class="bg-primary text-on-primary font-black uppercase text-xs tracking-[0.2em] px-10 py-4 rounded-lg hover:bg-slate-900 hover:text-white transition-all">Enlist</button>
</form>
</div>
</div>
</section>
</div>
</body>
</html>
