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
<title>Shop | Beyond Miles Adventure</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
</head>
<body class="bg-surface font-body text-on-surface selection:bg-primary selection:text-white">
<main>
<!-- Hero Section -->
<section class="relative h-[716px] w-full overflow-hidden flex items-end px-6 md:px-12 pb-16">
<img alt="Rugged mountain gear displayed on a weathered wooden table with dramatic lighting" class="absolute inset-0 w-full h-full object-cover" data-alt="dramatic wide shot of high-quality outdoor hiking gear and equipment spread across a rustic wooden surface in a mountain cabin setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfl51K1RwQRUlwVG5B0DkMrbh7C_0g5NLXShIYekyBSoxrzlHUnZsh_yM9lUM6nD73v9byqny81tXVl9Og-bqU0eS4VK7rhZSXc5BFZ3WcWJEbWevBnr6MufENQhISnIEvYHFRhFpC7yu-EqI9ieFKewh2OCojuXHW88b2MbWH8Z-3DmkyKJNBX3RUOd08VXyF4_BflgBjy9gIbxQYSz7rdm9Abyl5SeO58lorvN5ICWK43GoXT1VkNu6GuWi3FzQ_uF4oUS9Sswk"/>
<div class="absolute inset-0 scrim-hero"></div>
<div class="relative z-10 max-w-4xl">
<span class="inline-block bg-primary text-white text-[10px] font-bold tracking-widest uppercase px-3 py-1 mb-6 rounded-lg">New Season Arrival</span>
<h1 class="text-white text-5xl md:text-8xl font-black leading-none tracking-tighter mb-6">RUGGED GEAR FOR THE TRAIL</h1>
<p class="text-white/80 text-lg md:text-xl max-w-xl font-light mb-8">Performance-driven equipment designed to endure the harshest elements and the longest miles. Engineered for those who never stop exploring.</p>
<div class="flex gap-4">
<button class="bg-primary text-on-primary-container px-8 py-4 rounded-lg font-bold uppercase tracking-widest text-sm hover:brightness-110 active:scale-95 transition-all">Shop All Collection</button>
<button class="bg-white/10 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-lg font-bold uppercase tracking-widest text-sm hover:bg-white/20 active:scale-95 transition-all">View Lookbook</button>
</div>
</div>
</section>
<!-- Main Shopping Area -->
<section class="px-6 md:px-12 py-20 max-w-8xl mx-auto flex flex-col lg:flex-row gap-12">
<!-- Filters / Sidebar -->
<aside class="w-full lg:w-64 space-y-12">
<div>
<h3 class="font-black text-xl uppercase tracking-tighter mb-6">Categories</h3>
<ul class="space-y-4">
<li><a class="text-primary font-bold text-sm uppercase tracking-wide flex justify-between items-center" href="#">All Gear <span>(42)</span></a></li>
<li><a class="text-slate-500 hover:text-primary font-bold text-sm uppercase tracking-wide flex justify-between items-center" href="#">Technical Apparel <span>(18)</span></a></li>
<li><a class="text-slate-500 hover:text-primary font-bold text-sm uppercase tracking-wide flex justify-between items-center" href="#">Hard Goods <span>(12)</span></a></li>
<li><a class="text-slate-500 hover:text-primary font-bold text-sm uppercase tracking-wide flex justify-between items-center" href="#">Accessories <span>(12)</span></a></li>
</ul>
</div>
<div>
<h3 class="font-black text-xl uppercase tracking-tighter mb-6">Price Range</h3>
<div class="w-full h-1 bg-slate-200 rounded-full relative">
<div class="absolute left-1/4 right-1/4 h-full bg-primary rounded-full"></div>
<div class="absolute left-1/4 top-1/2 -translate-y-1/2 w-4 h-4 bg-white border-2 border-primary rounded-full"></div>
<div class="absolute right-1/4 top-1/2 -translate-y-1/2 w-4 h-4 bg-white border-2 border-primary rounded-full"></div>
</div>
<div class="flex justify-between mt-4 font-bold text-xs text-slate-500">
<span>$0</span>
<span>$500+</span>
</div>
</div>
</aside>
<!-- Product Grid (Asymmetric Editorial Style) -->
<div class="flex-1">
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
<!-- Product Card 1 (Large / Hero) -->
<div class="group relative bg-surface-container-lowest rounded-lg overflow-hidden shadow-sm md:col-span-2 hover:shadow-md transition-all">
<div class="aspect-[16/9] overflow-hidden">
<img alt="Technical hoodie in charcoal grey" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="professional editorial shot of a high-tech athletic hoodie in matte grey charcoal, presented on a minimalist background with clean shadows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxp763riVsVFdlW9PHF81B0kkHLU2_G_SwcNLFH6TcdJtBCX5QZTHaws2_bidUKWsfbRwH50b8wSqnWbN7B5xoX4BLulVYznrHQ3I82KAom1RBCLEEGR5ge0G4atny_a8BlQ4MP5PlA0Ukgg-5B8rncgYVra_OcyjI81HO6WRXWZaGfC84A3fLlEytOHTT-ViY-rybugu6BbgaYSx_BX5zswtpB2f4-rgTr8O0wwYrqhqssd0umOHY2aPV5S4SSTZHIZMwPeeJBpM"/>
</div>
<div class="p-8 flex justify-between items-start">
<div>
<span class="text-[10px] font-black uppercase tracking-[0.2em] text-primary mb-2 block">Featured Gear</span>
<h3 class="text-2xl font-black uppercase tracking-tighter">Ember Pro Technical Hoodie</h3>
<p class="text-slate-500 mt-2 max-w-md">Weather-resistant outer shell with thermal-regulating fleece interior. Built for dawn patrols.</p>
</div>
<div class="text-right">
<span class="text-2xl font-black text-slate-900">$145.00</span>
<button class="mt-4 block w-full bg-slate-900 text-white text-[10px] font-bold uppercase tracking-widest py-3 px-6 rounded-lg hover:bg-primary transition-colors">Quick View</button>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="group relative bg-surface-container-lowest rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
<div class="aspect-square overflow-hidden relative">
<img alt="White technical trail t-shirt" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="premium minimalist studio shot of a white technical performance t-shirt with subtle brand detailing, sharp studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDee4v4x7rgw-TkZESu6WbzZmSnzF2FztRLxU9fLlFpObH1I1drmfwrCsoZB6hDutM8cihpity9VU5Hoi8NsfGV7ypK3ek6Z5W_XmXFekZuI0NWehF2NvwqscZrJeu_2_-lsjPHYR7byZF9u_YMwvKTBONciuOddEnFeJ4TOgUmcyYCayqCbxgmn1wSa6oRZyyaHptAlF1pJl37umvmg44unS_B7MCN0ufEMdrm8L1tE0dV8-c1_irK4SvYC9dYhv9v1VmY7xR4LEc"/>
<button class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md p-3 rounded-lg shadow-sm opacity-0 group-hover:opacity-100 transition-opacity active:scale-95">
<span class="material-symbols-outlined text-slate-900">add_shopping_cart</span>
</button>
</div>
<div class="p-6">
<h3 class="text-sm font-black uppercase tracking-widest mb-1">Trail-Lite Tee</h3>
<div class="flex justify-between items-center">
<span class="text-slate-500 text-xs">Snow Peak White</span>
<span class="font-black">$48.00</span>
</div>
</div>
</div>
<!-- Product Card 3 -->
<div class="group relative bg-surface-container-lowest rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
<div class="aspect-square overflow-hidden relative">
<img alt="Insulated water bottle in orange" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="rugged matte orange insulated water bottle standing on a damp rock outdoors, moody overcast lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGxpGX0k9oGyeJqcsx01UoquhiRUU6yZ1rhMZDPfxPcAlUUg44QlkfG6E9UNm0cUELVjLA4wu1AmsTd7pE5I9rw_3pFUppO3tPs3s3BdLBFreMH2O-juFrjQLQxbIScUdEyMoA-2gVzxF9bD8hgeEG51E-gV2caG8ZrVud9u407dcU9cKckUDMfLiBff0RKaDATygOTYGqJ3FGku3p5_9LNTX1wRWWCAN6GsUhwUtzULPml7rjUWNqC7AChcVHBODpeAb9F8tVBeI"/>
</div>
<div class="p-6">
<h3 class="text-sm font-black uppercase tracking-widest mb-1">Ember 32oz Vessel</h3>
<div class="flex justify-between items-center">
<span class="text-slate-500 text-xs">Ember Orange</span>
<span class="font-black">$38.00</span>
</div>
</div>
</div>
<!-- Product Card 4 -->
<div class="group relative bg-surface-container-lowest rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
<div class="aspect-square overflow-hidden relative">
<img alt="Outdoor jacket" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="lifestyle photography of a durable navy blue expedition jacket hanging in a rustic cabin entry, warm ambient light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALsBR1akEF4XMADbbOm0myYnW8urQZqAhAR8SO0MS4wVKYMpZQ1nGzxeNtHjF-QHk8wlfUNR3Al2Hw1zEMbKtleI_00ZesO6IV8PW1YhCyxGFhEoKjqAIS3opu9kwpQmdfDj46wm0Qupfcg3UN59uxgG6-Ja6C_D1KCvt6J9-G4NK4kOig-pL0jqhR8pjQjCNhi-Pwzg-VF2OIXpx0vaQhPIQWcKV8-zPigV0I17BX-TEZzDTzKYrsIih5DwFAtVXxtJAKTRjElc0"/>
</div>
<div class="p-6">
<h3 class="text-sm font-black uppercase tracking-widest mb-1">Expedition Shell</h3>
<div class="flex justify-between items-center">
<span class="text-slate-500 text-xs">Deep Navy</span>
<span class="font-black">$285.00</span>
</div>
</div>
</div>
<!-- Product Card 5 -->
<div class="group relative bg-surface-container-lowest rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
<div class="aspect-square overflow-hidden relative">
<img alt="Technical backpack" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="high performance tactical backpack in olive green with multiple straps and buckles, studio lighting on textured fabric" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLgcgngVhlkQV1qDGQQbv6-X2R8nHi9C_CugWiTs2JjYEV0bacy7QwXpuMDf1XeFbE7F0IRiU0LqFtHyuodOfVz2GRYp7_Fbv0j7GpbIzmcA70Zb_Wr3laLLk_W7SmP2OCVcp9dXfwn-EngPoc6UtBQGhS6Dt9EhMuwP6GjR-4empWoJ9Vy69kqRDhVGM8LLYKs6m5qF5GM8tI7xjlKK3NAQz7Wzi7VkoW0cU2bvFhEQ2DrRT3l29VqxQM0mwzVVRCx3WnBGpY704"/>
</div>
<div class="p-6">
<h3 class="text-sm font-black uppercase tracking-widest mb-1">Apex 30L Pack</h3>
<div class="flex justify-between items-center">
<span class="text-slate-500 text-xs">Alpine Olive</span>
<span class="font-black">$195.00</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Detail Modal Overlay (Visible state mocked) -->
<div class="fixed inset-0 z-[100] flex items-center justify-end pointer-events-none">
<div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm pointer-events-auto opacity-0 invisible"></div>
<!-- Flyout Cart Section -->
<!-- <div class="w-full max-w-md h-full bg-white shadow-2xl pointer-events-auto flex flex-col transform translate-x-full transition-transform duration-500 ease-in-out lg:translate-x-0 lg:static hidden lg:flex">
<div class="p-8 flex justify-between items-center border-b border-slate-100">
<h2 class="font-black text-2xl uppercase tracking-tighter">Your Cart</h2>
<span class="text-slate-400 text-sm">(2 Items)</span>
</div>
<div class="flex-1 overflow-y-auto p-8 space-y-8"> -->
<!-- Cart Item -->
<!-- <div class="flex gap-4">
<div class="w-20 h-20 bg-slate-100 rounded-lg overflow-hidden flex-shrink-0">
<img alt="Cart Item 1" class="w-full h-full object-cover" data-alt="thumbnail of a white technical t-shirt for cart preview" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC496Hamy-16jhcjtP6i3a217ohss3dKmJXFd205zAN8-_sM2D2PpzvtmaNkhyBbMptfdXsV9fVCqO0mmMp64xBiuhDcqjvZzsEnltQxILKfMlfGGdn8dd1vYwxjvXg5vxH7G_Je4-IFbXXcK63v15vOVDLqkyN_MXAB7ZpJmVT_ERKxR7hKsjNo43NXAISTLQWWsHfRPxOiNDEjhWUIb3SwacLQiECI6xIvAxCppW61-ID4EAZqLCIgNFRzBlnlEcmiVwYJcFCS3g"/>
</div>
<div class="flex-1">
<div class="flex justify-between">
<h4 class="text-xs font-black uppercase tracking-wider">Trail-Lite Tee</h4>
<span class="font-black text-sm">$48.00</span>
</div>
<p class="text-[10px] text-slate-500 mt-1 uppercase font-bold">Size: Large | Color: White</p>
<div class="flex items-center gap-3 mt-3">
<button class="w-6 h-6 border border-slate-200 rounded flex items-center justify-center text-slate-400 hover:border-primary hover:text-primary transition-colors">—</button>
<span class="text-xs font-bold">1</span>
<button class="w-6 h-6 border border-slate-200 rounded flex items-center justify-center text-slate-400 hover:border-primary hover:text-primary transition-colors">+</button>
</div>
</div>
</div> -->
<!-- Cart Item -->
<!-- <div class="flex gap-4">
<div class="w-20 h-20 bg-slate-100 rounded-lg overflow-hidden flex-shrink-0">
<img alt="Cart Item 2" class="w-full h-full object-cover" data-alt="thumbnail of an orange water bottle for cart preview" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHFPqpXXGtDdK6fFCBTS-KvePutrnqfstELGFqllEsw8kkrxmg1RUDud_C686hVNXAeSboM2PBzB6WJBg6Sl44Ghj_CWN5UKrfAzhPzzujqwSN38Ic3zzY-WGHEkRu2CO_y_WE0XPInLrw6AdxXmA-gab1ltstuLavfvDeVeSkqDDVR0M5g_DSQQAS01Wx9Mxc3vND-KGJB84K6ESjXXd9-h4EQ5LA3Zwo8bwxC2tPq_Bi0uK6ax4yU6aVz1_fHtiWrNCB5aDhxe4"/>
</div>
<div class="flex-1">
<div class="flex justify-between">
<h4 class="text-xs font-black uppercase tracking-wider">Ember 32oz Vessel</h4>
<span class="font-black text-sm">$38.00</span>
</div>
<p class="text-[10px] text-slate-500 mt-1 uppercase font-bold">Size: One Size | Color: Orange</p>
<div class="flex items-center gap-3 mt-3">
<button class="w-6 h-6 border border-slate-200 rounded flex items-center justify-center text-slate-400 hover:border-primary hover:text-primary transition-colors">—</button>
<span class="text-xs font-bold">1</span>
<button class="w-6 h-6 border border-slate-200 rounded flex items-center justify-center text-slate-400 hover:border-primary hover:text-primary transition-colors">+</button>
</div>
</div>
</div>
</div>
<div class="p-8 bg-surface-container border-t border-slate-200">
<div class="space-y-2 mb-6">
<div class="flex justify-between text-xs font-bold text-slate-500 uppercase tracking-widest">
<span>Subtotal</span>
<span>$86.00</span>
</div>
<div class="flex justify-between text-xs font-bold text-slate-500 uppercase tracking-widest">
<span>Shipping</span>
<span>Calculated at checkout</span>
</div>
<div class="flex justify-between text-xl font-black uppercase tracking-tighter pt-2 border-t border-slate-300">
<span>Total</span>
<span>$86.00</span>
</div>
</div>
<button class="w-full bg-primary text-on-primary-container font-black uppercase tracking-widest py-5 rounded-lg hover:brightness-110 active:scale-[0.98] transition-all">Proceed to Checkout</button>
<p class="text-center text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-4">Free standard shipping on orders over $150</p>
</div>
</div>
</div> -->
</main>
<!-- Product Detail Modal (Sample Content) -->
<div class="fixed inset-0 z-[110] flex items-center justify-center p-6 hidden">
<div class="absolute inset-0 bg-slate-900/80 backdrop-blur-md"></div>
<div class="relative bg-white w-full max-w-6xl h-full max-h-[921px] rounded-xl shadow-2xl flex flex-col md:flex-row overflow-hidden overflow-y-auto">
<button class="absolute top-6 right-6 z-10 text-slate-900 bg-white/80 p-2 rounded-full hover:bg-white transition-colors">
<span class="material-symbols-outlined">close</span>
</button>
<div class="w-full md:w-1/2 h-full bg-slate-100">
<img alt="Ember Pro Technical Hoodie Detail" class="w-full h-full object-cover" data-alt="close up detailed photography of technical hoodie fabric showing water droplets repelling from the surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnIgxhyO9U9tJqNWipDbQtKE-Ka6-877PhKQ9Pw_4ecZ4A3usczJQuqjdBGfPWq9qV3c6A8-unSc-jWa2T71JhaAjoE9s7Hrc-ekjiJBPniNWQtr5pPCMrVtP1A0PrQT0ndhsiQ1Q64rYkBcsMzi_dTlY5HTqD_WWFku4SdEIUweexj90nHh1yxQB7E_kqu-7X41w3aNACq4bStZPPsbai4x30WPPOWRCScnAP4HE3NXZtYg0B3n-iEww9ucA3ot-0q7Us9LuGDSs"/>
</div>
<div class="w-full md:w-1/2 p-8 md:p-16 flex flex-col">
<span class="text-[10px] font-black uppercase tracking-[0.3em] text-primary mb-4 block">New Arrival</span>
<h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-6 leading-none">Ember Pro Technical Hoodie</h2>
<div class="text-2xl font-black text-slate-900 mb-8">$145.00</div>
<p class="text-slate-600 leading-relaxed mb-8">
                    The Ember Pro is our most versatile technical layer. Using advanced air-grid fleece and a PFC-free DWR coating, it provides exceptional warmth-to-weight ratio while shielding you from light precipitation. Ergonomic articulated sleeves allow for full range of motion on technical climbs.
                </p>
<div class="mb-8">
<div class="flex justify-between items-center mb-4">
<span class="text-xs font-black uppercase tracking-widest">Select Size</span>
<button class="text-[10px] font-bold uppercase tracking-widest text-primary underline">Size Guide</button>
</div>
<div class="grid grid-cols-5 gap-3">
<button class="border-2 border-slate-200 py-3 text-sm font-bold uppercase hover:border-primary transition-colors">S</button>
<button class="border-2 border-slate-200 py-3 text-sm font-bold uppercase hover:border-primary transition-colors">M</button>
<button class="border-2 border-primary bg-primary/5 py-3 text-sm font-bold uppercase">L</button>
<button class="border-2 border-slate-200 py-3 text-sm font-bold uppercase hover:border-primary transition-colors">XL</button>
<button class="border-2 border-slate-200 py-3 text-sm font-bold uppercase hover:border-primary transition-colors">XXL</button>
</div>
</div>
<div class="mt-auto space-y-4">
<button class="w-full bg-slate-900 text-white font-black uppercase tracking-widest py-6 rounded-lg flex items-center justify-center gap-3 hover:bg-slate-800 active:scale-[0.98] transition-all">
<span class="material-symbols-outlined">shopping_bag</span>
                        Add to Cart
                    </button>
<div class="flex gap-4">
<div class="flex-1 border border-slate-200 rounded-lg p-4 flex items-center gap-3">
<span class="material-symbols-outlined text-slate-400">local_shipping</span>
<span class="text-[10px] font-bold uppercase tracking-widest">Fast Delivery</span>
</div>
<div class="flex-1 border border-slate-200 rounded-lg p-4 flex items-center gap-3">
<span class="material-symbols-outlined text-slate-400">history</span>
<span class="text-[10px] font-bold uppercase tracking-widest">30 Day Returns</span>
</div>
</div>
</div>
</div>
</div>
</div>
</body></html>
</div>