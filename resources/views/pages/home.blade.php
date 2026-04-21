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
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary": "#f48c25",
                "background-light": "#f8f7f5",
                "background-dark": "#221910",
              },
              fontFamily: {
                "display": ["Lexend"]
              },
              borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
            },
          },
        }
    </script>
<title>Beyond Miles | Adventure Awaits</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 transition-colors duration-300">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<!-- Navigation -->

<!-- Hero Section -->
<section class="relative h-[870px] w-full overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Adventurous hikers standing on a mountain ridge at sunset" style='background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.6)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCN03QoTeBNdUMq1rWbs4mMQZT2pDltWA2x_X_MIbXaROF6XNvWN2oeZQMPX43Q66bKaiHMZtmuHrVfoo88a4FBFfIyP-OBbv3gbB_xI24TvXIoH3ERz2siZ1EF5Cr8bCfzVPdF04F8u8cMvye-swp7ulxirxEZZ7DYKcYZRfyXRzSNhHkhixgfxEpPaEfoCYUUjBMj1S5UbVHh2UHdlcPnj0DNasjr4UfwfQ4XFpPgAoRayDV1i6pV3Z48zvXs6Yf6T3ShAjGQkFU");'>
</div>
<div class="relative z-10 flex h-full flex-col items-center justify-center text-center px-6">
<h1 class="max-w-4xl text-5xl md:text-7xl font-black text-white leading-tight tracking-tight mb-6">
                    Push Beyond Your Limits
                </h1>
<p class="max-w-2xl text-lg md:text-xl text-slate-100 mb-10 font-light">
                    Experience the thrill of the outdoors with expert-led adventures, professional coaching, and premium performance gear.
                </p>
<div class="flex flex-col sm:flex-row gap-4">
<button class="px-10 py-4 rounded-lg bg-primary text-slate-900 font-bold text-lg hover:scale-105 transition-transform">
                        Start Your Adventure
                    </button>
<button class="px-10 py-4 rounded-lg bg-white/20 backdrop-blur-md text-white border border-white/30 font-bold text-lg hover:bg-white/30 transition-all">
                        View Activities
                    </button>
</div>
</div>
</section>
<!-- Our Activities -->
<section class="py-24 px-6 lg:px-10 max-w-7xl mx-auto w-full">
<div class="flex items-end justify-between mb-12">
<div>
<h2 class="text-3xl font-extrabold mb-2">Our Activities</h2>
<p class="text-slate-600 dark:text-slate-400">Discover your next challenge</p>
</div>
<a class="text-primary font-bold flex items-center gap-2 group" href="/activities" wire:navigate>
                    View All <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
@forelse($events as $event)
<div class="group relative h-[400px] overflow-hidden rounded-xl cursor-pointer">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), transparent), url("{{ $event->image ? asset('storage/' . $event->image) : 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80' }}");'></div>
<div class="absolute bottom-0 p-8">
<h3 class="text-2xl font-bold text-white mb-2">{{ $event->name }}</h3>
<p class="text-slate-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">{{ $event->description }}</p>
</div>
</div>
@empty
<div class="col-span-full text-center py-12 text-slate-600 dark:text-slate-400">
<p class="text-lg">No upcoming activities yet. Check back soon!</p>
</div>
@endforelse
</div>
</section>
<!-- Featured Gear -->
<section class="bg-slate-100 dark:bg-slate-900/50 py-24 px-6 lg:px-10">
<div class="max-w-7xl mx-auto">
<div class="mb-12 flex items-center justify-between">
<h2 class="text-3xl font-extrabold">Featured Gear</h2>
<div class="flex gap-2">
<button class="p-2 rounded-full border border-slate-300 dark:border-slate-700 hover:bg-primary/10 transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="p-2 rounded-full border border-slate-300 dark:border-slate-700 hover:bg-primary/10 transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
@forelse($merchandise as $item)
<div class="bg-white dark:bg-background-dark rounded-xl overflow-hidden shadow-sm border border-slate-200 dark:border-slate-800 flex flex-col">
<div class="h-64 bg-slate-200 overflow-hidden">
<img alt="{{ $item->name }}" class="w-full h-full object-cover" src="{{ $item->image ? asset('storage/' . $item->image) : 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=800&q=80' }}"/>
</div>
<div class="p-6">
<span class="text-xs font-bold text-primary uppercase tracking-wider">{{ ucfirst($item->category) }}</span>
<h4 class="text-lg font-bold mt-3">{{ $item->name }}</h4>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-2">{{ Str::limit($item->description, 60) }}</p>
<div class="mt-6 flex items-center justify-between">
<span class="font-bold text-xl">${{ number_format($item->price, 2) }}</span>
<div class="flex items-center gap-2">
<span class="text-xs text-slate-500 dark:text-slate-400">{{ $item->stock }} stock</span>
<button class="p-2 rounded-lg bg-primary/20 text-primary hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined text-base">shopping_cart</span>
</button>
</div>
</div>
</div>
</div>
@empty
<div class="col-span-full text-center py-12 text-slate-600 dark:text-slate-400">
<p class="text-lg">No merchandise available yet.</p>
</div>
@endforelse
</div>
</div>
</section>
<!-- Community Section -->
<section class="py-24 px-6 lg:px-10 max-w-7xl mx-auto w-full">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
<div class="relative">
<div class="grid grid-cols-2 gap-4">
<div class="space-y-4 pt-12">
<img class="rounded-xl w-full h-64 object-cover" data-alt="Group of friends high-fiving at a mountain summit" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9rWmNBkb9dBImLrnFySsdv8cpGPFSZL1HA41-qnhzCFK0w1Tl6fBDiZwnkTrqRhSD2v1QL-H_R6NY5s7ELczwOlOt17MQyLTeGDey5_NAlZclPJrEI_AKVaURHtTVI8H4fCO_WR6bsIpgFYEGblWIJATgbkU3XyhnMWWr9eOqKUrRx2OWZpNkMZNXizqy9H3J5xvw26gkcEPWB5BX49mldUCxY9Nb9sxnRMvSInKGVS12wcuY0YgGNOvF92Z8rQDzbXWuVmxTLEg"/>
<img class="rounded-xl w-full h-48 object-cover" data-alt="Trail running group training together in the morning" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnHfATT1M-pywZ6g1z587tflMGRwBlcbqBsiAfhKF8HmdcU2bl2YIkyTKeEIwb-Cbo1r8xTGIVoWKcqVcImZVuyuttGXQUJeYgJMIcgdUmQLdPKn4Jhi9MvW6AW9Rie6qp31zFz2laByTZaxWOOBrV48UD3l5fDskVkLGurfn3CcgQluFcOiwwi5CSt4rKJWH60us9_d2pPA_WI0U9LRLz-uQPG6-h1VZLUCQJWJCCAeMlzrM1ivotjGCI1lkm_OEoxLmNgdz-wqs"/>
</div>
<div class="space-y-4">
<img class="rounded-xl w-full h-48 object-cover" data-alt="Hiker showing a thumbs up next to a campfire" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAj7DkdIY0ZP-seZW3MrpYYv7-2d5Ob7MudsaN6He3GKUHXzgKny9KG67UOoYFNs42BLW2XtDZBVaSAQRayuly_WUcnWOdjHJpwSduPIRCeoKwsQg6c_j1e54U0m8_jhM55J7E7is1Z4V5e4H2yvTQ5reoNtY_ogfrRYRfmRhjzMUdx_Wi1n4I_yby_yn9AGJGa6n7Sx3K1LAY01sRFcLjZ4ikGEgpYesRqBKoqlWqy_3VXVdz830jU317NGB2WJ-XSLqcqT-9gmY"/>
<img class="rounded-xl w-full h-64 object-cover" data-alt="Community gathering at a modern climbing gym" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGL4I7cq57jX40GytfhVJwUelRrHU5gia7LzSaXmt57VecaadM9E-bdd7EmoP3kfc6lbigMJSGoCyeiZgr-iwb_sHwV2ymieC80dtl_JCJN1ZsHcwlkelfMxAR7W9JlIYwNMt0G0MPvTbhs_W4ol_8Hyb9OePaep4t-10Ap-KJmRWDOlUfwKjVjGpO_5nCjPyNiHu-kzcqyS1FkwNSkdFm2RWhinjhIU5mCzGJznjRlcInj_fgKXDuYbQ-bx_g0lcTEurr012i6ec"/>
</div>
</div>
<div class="absolute -z-10 top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
</div>
<div class="space-y-8">
<h2 class="text-4xl font-extrabold leading-tight">Join the Beyond Miles Community</h2>
<p class="text-lg text-slate-600 dark:text-slate-400">
                        We are more than just a brand. We are a collective of explorers, athletes, and nature lovers who push each other to reach new heights. Connect with locals, share your journey, and find your pack.
                    </p>
<div class="space-y-6">
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-primary">groups</span>
</div>
<div>
<h4 class="font-bold text-lg">Weekly Group Challenges</h4>
<p class="text-slate-500 dark:text-slate-400 text-sm">Join local meetups and push your limits with peers.</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-primary">verified_user</span>
</div>
<div>
<h4 class="font-bold text-lg">Expert-Led Workshops</h4>
<p class="text-slate-500 dark:text-slate-400 text-sm">Learn survival skills and navigation from the pros.</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-primary">forum</span>
</div>
<div>
<h4 class="font-bold text-lg">Member Stories</h4>
<p class="text-slate-500 dark:text-slate-400 text-sm">Read inspiring stories from our global community.</p>
</div>
</div>
</div>
<button class="px-10 py-4 rounded-lg bg-primary text-slate-900 font-bold text-lg hover:shadow-lg hover:shadow-primary/20 transition-all">
                        Join Our Community
                    </button>
</div>
</div>
</section>
</div>
</body></html>