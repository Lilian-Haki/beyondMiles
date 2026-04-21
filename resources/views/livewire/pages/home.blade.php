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


<div class="min-h-screen bg-background dark:bg-inverse-surface">
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
<!-- <div class="flex flex-col sm:flex-row gap-4"> -->
<button class="px-10 py-4 rounded-lg bg-primary text-slate-900 font-bold text-lg hover:scale-105 transition-transform">
                        Start Your Adventure
                    </button>
<!-- <button class="px-10 py-4 rounded-lg bg-white/20 backdrop-blur-md text-white border border-white/30 font-bold text-lg hover:bg-white/30 transition-all">
                        View Activities
                    </button>
</div> -->
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
<!-- Hikes -->
<div class="group relative h-[400px] overflow-hidden rounded-xl cursor-pointer">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Misty mountain trails for professional hiking" style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), transparent), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDoV8H57PlaSEvwTMU-ZAuvPSjzCHVy3lU4l15hPbMXNKZ0pPt2JfGYlGT-_cgGsxbD8MeUxYaDFm6UQCtggjILbqWRAnFWnYszZKJIRzG5OxUlVKiY19Hn9dZfo_iG-J0wm91PXm_H1jowtWnIydF_6rAcG9Qp5IUERmoC_fZ11YBweq5H6DpUMUt2lgxyHdP_jR6LYpyanoc9770URC9iTanXXFkOKOJfSSt_BCRn0DebIK8F5uulZQB0MrlfNAh0_fOpi1htzns");'></div>
<div class="absolute bottom-0 p-8">
<h3 class="text-2xl font-bold text-white mb-2">Hikes</h3>
<p class="text-slate-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">From coastal trails to alpine summits.</p>
</div>
</div>
<!-- Runs -->
<div class="group relative h-[400px] overflow-hidden rounded-xl cursor-pointer">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Trail runner sprinting on a forest path" style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), transparent), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAUfb0hULwhgSrAZQXLTRM5_MGt-VfaVMmS-7Oz53H04SjIrmJbTTAGGyGRI8pxrUSUOdz7h90QMfGpqxAV6QYHDePEkG261M9ByOWvbsoo_OIEH5RR271kTavZvl5HfoGVU_PE_LRBFJ244N6-jLKymC2bdejf2za05vy3qMtkN53Lp7VGcrfcY4o9Y2m4wASjx_7aliyTyGsnOiEmauYaWRJwHTq4q-aFYH4IkZ9U3G_pDaoByJTzywoAWgBX9bJ4oZ8ItLSuGSk");'></div>
<div class="absolute bottom-0 p-8">
<h3 class="text-2xl font-bold text-white mb-2">Runs</h3>
<p class="text-slate-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Endurance trail running events and training.</p>
</div>
</div>
<!-- Walks -->
<div class="group relative h-[400px] overflow-hidden rounded-xl cursor-pointer">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Peaceful sunlit path through ancient woods" style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), transparent), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBU-YZP_il8FnLUnQ5H-Y7snasER6HXmE3EyfiYFDAuQmZBJpmLAdiqhhV-0UnRdJHXbGWrgdKjv-mMXUU_g_TJEsv3ETaGXn1pCwXIxUe56f8vKtoKVKfM1US_l0B460MpcgXWRz4QlQvKk4J84CQZDWzeAECGzG6_1Ynpmhv9s4aV_aLKqWLeAziqYkW3NgSkXEMzkZTCvnbLfC42xg3AJvpfSCuMdT4rwVpSdGw8kE0RFP-iubIA6_YRcD77sIglK-2xtmE07B0");'></div>
<div class="absolute bottom-0 p-8">
<h3 class="text-2xl font-bold text-white mb-2">Walks</h3>
<p class="text-slate-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Guided nature walks and mindful exploration.</p>
</div>
</div>
</div>
</section>   

    <!-- Featured Merchandise -->
    <div class="bg-surface-container-low dark:bg-surface-container-high">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-headline font-bold text-on-background dark:text-inverse-on-surface mb-4">Premium Gear</h2>
                <p class="text-lg text-on-surface-variant">Equip yourself with the best adventure gear</p>
            </div>

            @if($featuredMerchandise->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($featuredMerchandise as $item)
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
                                <p class="text-2xl font-headline font-bold text-primary">KES {{ number_format($item->price, 2) }}</p>
                                <p class="text-xs text-on-surface-variant dark:text-slate-400">{{ $item->stock_quantity > 0 ? $item->stock_quantity . ' in stock' : 'Out of stock' }}</p>
                            </div>
                            <button class="p-2 rounded-lg {{ $item->stock > 0 ? 'bg-primary text-on-primary hover:bg-primary-fixed-dim' : 'bg-surface-container-high text-on-surface-variant cursor-not-allowed' }} transition-colors" {{ $item->stock <= 0 ? 'disabled' : '' }}>
                                <span class="material-symbols-outlined text-base">shopping_cart</span>
                            </button>
                        </div>
</div>
</div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16">
                    <p class="text-xl text-on-surface-variant">No featured merchandise available at this time.</p>
                </div>
            @endif
        </div>
    </div>

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
<h4 class="font-bold text-lg">Weekly Challenges</h4>
<p class="text-slate-500 dark:text-slate-400 text-sm">Join us in weekly challenges to test your limits and connect with fellow adventurers.</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-primary">verified_user</span>
</div>
<div>
<h4 class="font-bold text-lg">Expert-Led Trails</h4>
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
<button 
    onclick="window.open('https://wa.me/254757151520', '_blank')"
class="px-10 py-4 rounded-lg bg-primary text-slate-900 font-bold text-lg hover:shadow-lg hover:shadow-primary/20 transition-all">
                        Join Our Community
                    </button>
</div>
</div>
</section>
</div>
