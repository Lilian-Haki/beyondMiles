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
                        <a href="/activities" wire:navigate>Start Your Adventure</a>
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
<div class="group relative h-[400px] overflow-hidden rounded-xl cursor-pointer"><a href="/activities" wire:navigate>
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Misty mountain trails for professional hiking" style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), transparent), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDoV8H57PlaSEvwTMU-ZAuvPSjzCHVy3lU4l15hPbMXNKZ0pPt2JfGYlGT-_cgGsxbD8MeUxYaDFm6UQCtggjILbqWRAnFWnYszZKJIRzG5OxUlVKiY19Hn9dZfo_iG-J0wm91PXm_H1jowtWnIydF_6rAcG9Qp5IUERmoC_fZ11YBweq5H6DpUMUt2lgxyHdP_jR6LYpyanoc9770URC9iTanXXFkOKOJfSSt_BCRn0DebIK8F5uulZQB0MrlfNAh0_fOpi1htzns");'></div>
<div class="absolute bottom-0 p-8">
<h3 class="text-2xl font-bold text-white mb-2">Hikes</h3>
<p class="text-slate-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">From coastal trails to alpine summits.</p>
</div></a>
</div>
<!-- Runs -->
<div class="group relative h-[400px] overflow-hidden rounded-xl cursor-pointer"><a href="/activities" wire:navigate>
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Trail runner sprisprintingon a forest path" style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), transparent), url("https://images.unsplash.com/photo-1723882559473-62932ec7b4f9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fGJsYWNrJTIwbWFuJTIwcnVubmluZ3xlbnwwfHwwfHx8MA%3D%3D");'></div>
<div class="absolute bottom-0 p-8">
<h3 class="text-2xl font-bold text-white mb-2">Runs</h3>
<p class="text-slate-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Endurance trail running events and training.</p>
</div></a>
</div>
<!-- Walks -->
<div class="group relative h-[400px] overflow-hidden rounded-xl cursor-pointer"><a href="/activities" wire:navigate>
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Peaceful sunlit path through ancient woods" style='background-image: linear-gradient(to top, rgba(0,0,0,0.8), transparent), url("https://images.unsplash.com/photo-1700745286959-8658de43a15c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjN8fHRyYWlsfGVufDB8fDB8fHww");'></div>
<div class="absolute bottom-0 p-8">
<h3 class="text-2xl font-bold text-white mb-2">Walks</h3>
<p class="text-slate-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Guided nature walks and mindful exploration.</p>
</div></a>
</div>
</div>
</section>   

    <!-- Community Section -->
<section class="py-24 px-6 lg:px-10 max-w-7xl mx-auto w-full">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
<div class="relative">
<div class="grid grid-cols-2 gap-4">
<div class="space-y-4 pt-12">
<img class="rounded-xl w-full h-64 object-cover" data-alt="Group of friends hiking" src="https://images.unsplash.com/photo-1627289496743-8a9a08bb228a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Z3JvdXAlMjBoaWtlfGVufDB8fDB8fHww"/>
<img class="rounded-xl w-full h-48 object-cover" data-alt="Trail running group training together in the morning" src="https://images.unsplash.com/photo-1612888225637-35f4b0456634?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzZ8fHN3aW1taW5nJTIwaW4lMjB3YXRlcmZhbGx8ZW58MHx8MHx8fDA%3D"/>
</div>
<div class="space-y-4">
<img class="rounded-xl w-full h-48 object-cover" data-alt="Well lit Bonfire" src="https://images.unsplash.com/photo-1568494354623-3d36e8d537b4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGJvbmZpcmV8ZW58MHx8MHx8fDA%3D"/>
<img class="rounded-xl w-full h-64 object-cover" data-alt="Community hanging out" src="https://images.unsplash.com/photo-1734914312670-1b540001a66d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTl8fGJsYWNrJTIwcGVvcGxlJTIwcGxheWluZ3xlbnwwfHwwfHx8MA%3D%3D"/>
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
