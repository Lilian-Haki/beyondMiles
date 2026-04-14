<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<div>
<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;300;400;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
    </style>
</head>
<body class="bg-surface font-body text-on-background antialiased">
<main>
<!-- Hero Section -->
<section class="relative h-[716px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="dramatic wide shot of a modern industrial gym with high ceilings, concrete walls, and sunlight streaming through large windows onto lifting platforms" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSgvbw5ZdPRii1cyMoYI1h33_GQ3giNq-_sbzEyrNN4AJmHS0K2kPEHw7rZChtmncrqN9GNTD267nF6MQmSolEUJ9PPwVNZVCck7aB0_SClTu8PzxnysvGWmn2vbJ1nKzv_egTLzC8kurhoqBkn_skKcoBkeW8QSso4hejz3vmbJzTJ3QIN1SmSDcizdHxInBncp7xAv8ZndcZkrZEkSojSymK9bIA1x3zhpuDeZGmBjn_27pXzxOCU33NpwpEEqfGPv1uLM8W9AY"/>
<div class="absolute inset-0 bg-black/40"></div>
</div>
<div class="relative z-10 px-12 max-w-8xl mx-auto w-full">
<span class="text-primary font-black uppercase tracking-[0.3em] text-sm mb-4 block">Peak Performance</span>
<h1 class="text-white text-6xl md:text-8xl font-black tracking-tighter leading-none mb-6">UNYIELDING<br/>STRENGTH</h1>
<p class="text-white/80 max-w-xl text-lg font-light leading-relaxed mb-8">Elevate your baseline. Our facility is designed for those who find peace in the struggle and joy in the progress.</p>
<div class="flex gap-4">
<button class="bg-primary text-on-primary px-8 py-4 rounded-lg font-bold uppercase tracking-widest active:scale-95 transition-transform">Start Training</button>
<button class="bg-white/10 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-lg font-bold uppercase tracking-widest hover:bg-white/20 transition-all">Tour Facility</button>
</div>
</div>
</section>
<!-- Our Training Section -->
<section class="py-24 px-12 max-w-8xl mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
<div>
<span class="text-primary font-bold uppercase tracking-widest text-xs">The Methodology</span>
<h2 class="text-4xl md:text-5xl font-black tracking-tight text-slate-900 mt-2">OUR TRAINING</h2>
</div>
<p class="text-on-surface-variant max-w-md">Specialized programs built on scientific principles of hypertrophy, metabolic conditioning, and mobility.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- HIIT -->
<div class="group relative aspect-[4/5] overflow-hidden rounded-xl bg-slate-900 transition-all duration-500 hover:-translate-y-2">
<img class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-700" data-alt="athlete performing explosive box jumps in a dark gym environment with sharp contrast lighting and grit" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQB3zomdr282YeIBpbz6zhlSk1Vh3JQAg4gjGELzfqavmc-RCFGnM0vyTEqZEpqvq7IwC34Vml2CLOST_hHWLxIRkix3EkJlmtYLrrEJY-zX2_xSSZpyk9D5BVd3lHDcujprQxxiMyANtS6-yuDfJv7xI6z9_FtYXVmUaQRDvoTqXGBH3sCXcyf8FUKIFhGMA6g1wTzIUZwEjlZORiuShR9Z_oEzKE3zUka2q3A-_ebQphsToDMe5O8sUGlUVnIEM6mw99NXuZNw4"/>
<div class="absolute inset-0 scrim-bottom flex flex-col justify-end p-8">
<h3 class="text-white text-3xl font-black uppercase mb-2">HIIT</h3>
<p class="text-white/70 text-sm mb-4">High-intensity interval training designed to push your VO2 max and ignite metabolism.</p>
<div class="flex items-center text-primary font-bold text-xs tracking-widest uppercase gap-2 cursor-pointer">
                            Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
</div>
</div>
</div>
<!-- Yoga -->
<div class="group relative aspect-[4/5] overflow-hidden rounded-xl bg-slate-900 transition-all duration-500 md:mt-12 hover:-translate-y-2">
<img class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-700" data-alt="serene yoga practitioner in a high-contrast pose against a minimalist industrial backdrop with soft side lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvhm9nN-obeEBUO3smG9CRdd90oXvBmVm-PFNDXNLFvNReOvW9OIZTuJAlBMknUWLBz6di3YN4yvY8oxDVmo0F9zGwjIb9FhTw9QtqqEWgoyobHSKIEs1Frj1OOLO7e2Bou6nZRPa0G-5lHd-dhtG515q_9Y58GI55dKUcW4d_ZLIySnnvKXsTRUBLFssh-i2GOZWAb9LRyrgXw5Cpy4aCsQ3EJGlaWg5UyIEe862KFBYjJjMxcJBy-YDYsCsxg6IWt2mnuXyV9sw"/>
<div class="absolute inset-0 scrim-bottom flex flex-col justify-end p-8">
<h3 class="text-white text-3xl font-black uppercase mb-2">Yoga</h3>
<p class="text-white/70 text-sm mb-4">Precision movement and breathwork to enhance recovery, focus, and structural integrity.</p>
<div class="flex items-center text-primary font-bold text-xs tracking-widest uppercase gap-2 cursor-pointer">
                            Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
</div>
</div>
</div>
<!-- Strength -->
<div class="group relative aspect-[4/5] overflow-hidden rounded-xl bg-slate-900 transition-all duration-500 hover:-translate-y-2">
<img class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-700" data-alt="close up of heavy iron dumbbells on a gym floor with dramatic lighting highlighting the metal texture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBaJJGFPIoYU2sOTfRVJxepkUw9d9FGKgTZAYgd50qHXYrhgfE-wTe_jRpMxwGNAYkP6HPEx0OZN_kuzKCDbkVk1LdbvUFSjVqzYcnYlLRwmliXJ8nHY1-oH93qfYN-8nHvSmOV_E6Eu7QMng6v0j8ZA3ImGWLhjQ9uuwMdTKvMCK0Rp9nc3Xduc7lzdfJXN8M1D1qnNtFh4KT6u34fvhP0Nz-lyUzqEq2XMDt_IefVCY3SY26ABZodIakh0GiiGa3kcn5KscSxUzw"/>
<div class="absolute inset-0 scrim-bottom flex flex-col justify-end p-8">
<h3 class="text-white text-3xl font-black uppercase mb-2">Strength</h3>
<p class="text-white/70 text-sm mb-4">Functional powerlifting and bodybuilding for sustainable muscle growth and raw power.</p>
<div class="flex items-center text-primary font-bold text-xs tracking-widest uppercase gap-2 cursor-pointer">
                            Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
</div>
</div>
</div>
</div>
</section>
<!-- Location Section -->
<section class="py-24 bg-surface-container">
<div class="max-w-8xl mx-auto px-12 flex flex-col lg:flex-row gap-12 items-center">
<div class="w-full lg:w-1/2">
<span class="text-primary font-bold uppercase tracking-widest text-xs">Our Base</span>
<h2 class="text-4xl font-black tracking-tight text-slate-900 mt-2 mb-6 uppercase">LOCATION</h2>
<div class="space-y-8">
<div class="flex gap-6 items-start">
<div class="bg-primary/10 p-4 rounded-lg">
<span class="material-symbols-outlined text-primary">location_on</span>
</div>
<div>
<h4 class="font-bold text-lg text-slate-900">Ember District HQ</h4>
<p class="text-on-surface-variant">442 Industrial Way, Suite 10<br/>Portland, OR 97201</p>
</div>
</div>
<div class="flex gap-6 items-start">
<div class="bg-primary/10 p-4 rounded-lg">
<span class="material-symbols-outlined text-primary">schedule</span>
</div>
<div>
<h4 class="font-bold text-lg text-slate-900">Training Hours</h4>
<p class="text-on-surface-variant">Mon - Fri: 05:00 - 22:00<br/>Sat - Sun: 07:00 - 20:00</p>
</div>
</div>
<button class="bg-slate-900 text-white px-8 py-4 rounded-lg font-bold uppercase tracking-widest active:scale-95 transition-transform flex items-center gap-2">
                            Get Directions <span class="material-symbols-outlined text-sm">directions</span>
</button>
</div>
</div>
<div class="w-full lg:w-1/2 aspect-square lg:aspect-video rounded-xl overflow-hidden shadow-sm">
<img class="w-full h-full object-cover grayscale brightness-75 hover:grayscale-0 transition-all duration-1000" data-alt="stylized architectural map showing urban grid in monochromatic dark tones with primary orange highlights for points of interest" data-location="Portland, Oregon" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBM0zWWy1kFGB764w18CGkHlQUd_rVSo65Ue5MGbEVOXbms3ISZSN6QYh8O2uNln5C6tC5AiLOhLgnGJHG9E964-cPgVs4OqZAEZIroBhXL3ZdgqCcYp0Ly8tsPAL8c3h_paJaY3Fiy7yptfPB7rCcuCVSwfRO8vPQZEArw-mBRzTHAlWNLxmiWE_MwQmdh38amG_v6tLqX41BAb3-LXVIc6IwGT-3a6zEf-WYTLLNyFBLh629yWdlQj92OaakV9ZTxtmFM9e4Ei4s"/>
</div>
</div>
</section>
<!-- Pricing Plans -->
<section class="py-24 px-12 max-w-8xl mx-auto">
<div class="text-center mb-16">
<span class="text-primary font-bold uppercase tracking-widest text-xs">The Commitment</span>
<h2 class="text-4xl md:text-5xl font-black tracking-tight text-slate-900 mt-2">PRICING PLANS</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Drop-in -->
<div class="bg-surface-container-lowest p-8 rounded-xl border border-outline-variant shadow-sm flex flex-col">
<h3 class="text-xl font-black uppercase text-slate-900 mb-2">Drop-in</h3>
<div class="flex items-baseline gap-1 mb-6">
<span class="text-4xl font-black text-slate-900">$25</span>
<span class="text-on-surface-variant text-sm">/ session</span>
</div>
<ul class="space-y-4 mb-8 flex-grow">
<li class="flex items-center gap-3 text-sm text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-lg" data-weight="fill">check_circle</span> Full Gym Access
                        </li>
<li class="flex items-center gap-3 text-sm text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-lg" data-weight="fill">check_circle</span> Locker &amp; Shower
                        </li>
</ul>
<button class="w-full border border-slate-900 text-slate-900 py-3 rounded-lg font-bold uppercase tracking-wider hover:bg-slate-900 hover:text-white transition-all">Book Session</button>
</div>
<!-- Monthly -->
<div class="bg-slate-900 p-8 rounded-xl border border-primary/20 shadow-xl flex flex-col relative overflow-hidden transform md:-translate-y-4">
<div class="absolute top-0 right-0 bg-primary text-on-primary text-[10px] font-black px-4 py-1 uppercase tracking-widest">Most Popular</div>
<h3 class="text-xl font-black uppercase text-white mb-2">Monthly</h3>
<div class="flex items-baseline gap-1 mb-6">
<span class="text-4xl font-black text-white">$120</span>
<span class="text-slate-400 text-sm">/ month</span>
</div>
<ul class="space-y-4 mb-8 flex-grow">
<li class="flex items-center gap-3 text-sm text-slate-300">
<span class="material-symbols-outlined text-primary text-lg" data-weight="fill">check_circle</span> Unlimited Access
                        </li>
<li class="flex items-center gap-3 text-sm text-slate-300">
<span class="material-symbols-outlined text-primary text-lg" data-weight="fill">check_circle</span> 2 Guest Passes / Month
                        </li>
<li class="flex items-center gap-3 text-sm text-slate-300">
<span class="material-symbols-outlined text-primary text-lg" data-weight="fill">check_circle</span> 1 Training Consultation
                        </li>
</ul>
<button class="w-full bg-primary text-on-primary py-4 rounded-lg font-bold uppercase tracking-wider active:scale-95 transition-transform">Get Started</button>
</div>
<!-- Annual -->
<div class="bg-surface-container-lowest p-8 rounded-xl border border-outline-variant shadow-sm flex flex-col">
<h3 class="text-xl font-black uppercase text-slate-900 mb-2">Annual</h3>
<div class="flex items-baseline gap-1 mb-6">
<span class="text-4xl font-black text-slate-900">$99</span>
<span class="text-on-surface-variant text-sm">/ month</span>
</div>
<ul class="space-y-4 mb-8 flex-grow">
<li class="flex items-center gap-3 text-sm text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-lg" data-weight="fill">check_circle</span> All Monthly Perks
                        </li>
<li class="flex items-center gap-3 text-sm text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-lg" data-weight="fill">check_circle</span> Billed Yearly ($1,188)
                        </li>
<li class="flex items-center gap-3 text-sm text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-lg" data-weight="fill">check_circle</span> Free Apparel Starter Pack
                        </li>
</ul>
<button class="w-full border border-slate-900 text-slate-900 py-3 rounded-lg font-bold uppercase tracking-wider hover:bg-slate-900 hover:text-white transition-all">Join Yearly</button>
</div>
</div>
</section>
<!-- Personal Trainers -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-8xl mx-auto px-12">
<div class="flex flex-col md:flex-row justify-between items-baseline mb-16">
<h2 class="text-4xl font-black tracking-tight text-slate-900 uppercase">THE GUIDES</h2>
<a class="text-primary font-bold uppercase text-sm tracking-widest flex items-center gap-2 mt-4 md:mt-0" href="#">View All Coaches <span class="material-symbols-outlined text-sm">arrow_outward</span></a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- Trainer 1 -->
<div class="group cursor-pointer">
<div class="aspect-[3/4] overflow-hidden rounded-lg mb-6 relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="portrait of a muscular trainer with short hair and intense expression in a high-contrast black and white gym setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4lsZqcaSLQWCA0HfpHdto2xfaQfPcltXhvcv11vfkuj2dSVFv52bZADEKxOIJIR8ypyin_M3P8nOKlprFmJueRXETeGzDpDtMWqCyiUl9q6luIZJFIC5pYRIp1AiL711FuZ1wGEdMUqeaVZdybSDZs13GLcvhecKfk4k0Fn-thysQOy3cmmQ2KvPTHFf-oYJlqB0a7MD1Rqs9hcza4fTl6K9efiyFFDfNfW19RH4GoldmIbhx8y2gEDV6MSGzQM4o1enkSyxlGqA"/>
<div class="absolute bottom-4 left-4 bg-primary text-on-primary px-3 py-1 text-[10px] font-black uppercase tracking-widest">Strength</div>
</div>
<h4 class="text-xl font-bold text-slate-900 uppercase">Marcus Thorne</h4>
<p class="text-on-surface-variant text-sm font-light">Lead Strength &amp; Conditioning</p>
</div>
<!-- Trainer 2 -->
<div class="group cursor-pointer">
<div class="aspect-[3/4] overflow-hidden rounded-lg mb-6 relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="female yoga instructor in a focused balance pose with natural lighting and soft shadows in a minimalist studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFdGCkzDD6f9D_KaqbRM7tI3JtpPedZd-dtPMswfpz83ReuUjtyLt_RtGB0c9WRG79Nbczdkm9tK2S2QfX7dU7gb9gxBog0eKkfC_RiU45PUmyRCLSZBCHOUs6wkk0_0Zp0wJAThfQto0xd_y-V40e4wQIicQgu4BHYjxVwW0GN2MBCpzr81JDkuuiRr4h5LVHzDuRvBrLaHVY2qYx8Re97t-RoDJLW73emPt15XjGg9uDJigKxzDDnUR9812EHCyl7vlCAyzHvFA"/>
<div class="absolute bottom-4 left-4 bg-primary text-on-primary px-3 py-1 text-[10px] font-black uppercase tracking-widest">Mobility</div>
</div>
<h4 class="text-xl font-bold text-slate-900 uppercase">Elena Vance</h4>
<p class="text-on-surface-variant text-sm font-light">Yoga &amp; Mobility Specialist</p>
</div>
<!-- Trainer 3 -->
<div class="group cursor-pointer">
<div class="aspect-[3/4] overflow-hidden rounded-lg mb-6 relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="athletic trainer demonstrating a heavy kettlebell swing with intense focus and dynamic movement blur" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAStjfmTbNjryBg_ryvkV2LgT7i0erMk63bkoFLkoaCLOBdHC9th4lbGhlUdTms3qmpar81FJ-4cJbPWxeg8Kyo6_wbgTcC4VzYYX2mK9qbdBFT6Cs0GZ0XCQgqjrKMBqP5huJ8xa7GG_QqP9g9XGa9UVvZRxMu-WArNLRnu1VrdZUsC6JetNIvmrmAfIj5x72YGIut7l7ojixCVR4f6_dbLYEKsFyQbI0CwOU8zEfEHATLyrAH85eXZi9H3Rr7q6x739Thw9CkgJk"/>
<div class="absolute bottom-4 left-4 bg-primary text-on-primary px-3 py-1 text-[10px] font-black uppercase tracking-widest">HIIT</div>
</div>
<h4 class="text-xl font-bold text-slate-900 uppercase">David Chen</h4>
<p class="text-on-surface-variant text-sm font-light">Metabolic Performance Coach</p>
</div>
<!-- Trainer 4 -->
<div class="group cursor-pointer">
<div class="aspect-[3/4] overflow-hidden rounded-lg mb-6 relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="trainer with tattoos focusing on a powerlifting set in a gritty industrial gym with moody backlighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDteCo2-qgZR75Wsug1_FRIqwbUd5kqBea9VkY6tCPA48fSDfRy4SOcdxa4TEnlWgA0j-I6eEPUoYrq3Sdw4LVO3BogjDvXLlz62tq_zUEjY45nq8ko-_TroB4Lz5-_KTOP_nY_VtXxLwbRZ7y2JaX6GaxMytW1YVRXvE3i4m1QKLT6x_Sppg92S20JE9wZpE7byfLBObI6DPGh926rcfKJ_dCbFQvybvXZWiM-mAbCgkRsSHCHFgOep4oOJioMyBaGW1LHAAzvJ4"/>
<div class="absolute bottom-4 left-4 bg-primary text-on-primary px-3 py-1 text-[10px] font-black uppercase tracking-widest">Power</div>
</div>
<h4 class="text-xl font-bold text-slate-900 uppercase">Jax Miller</h4>
<p class="text-on-surface-variant text-sm font-light">Powerlifting Specialist</p>
</div>
</div>
</div>
</section>
</main>
</body></html>
</div>