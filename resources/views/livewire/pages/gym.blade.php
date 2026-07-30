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

<!-- Our Training Section -->
<section class="py-24 px-12 max-w-8xl mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
<div>
<span class="text-primary font-bold uppercase tracking-widest text-xs">The Methodology</span>
<h2 class="text-4xl md:text-5xl font-black tracking-tight text-slate-900 mt-2">OUR TRAINING</h2>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- HIIT -->
<div class="group relative aspect-[4/5] overflow-hidden rounded-xl bg-slate-900 transition-all duration-500 hover:-translate-y-2">
<img class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-700" data-alt="athlete performing explosive box jumps in a dark gym environment with sharp contrast lighting and grit" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQB3zomdr282YeIBpbz6zhlSk1Vh3JQAg4gjGELzfqavmc-RCFGnM0vyTEqZEpqvq7IwC34Vml2CLOST_hHWLxIRkix3EkJlmtYLrrEJY-zX2_xSSZpyk9D5BVd3lHDcujprQxxiMyANtS6-yuDfJv7xI6z9_FtYXVmUaQRDvoTqXGBH3sCXcyf8FUKIFhGMA6g1wTzIUZwEjlZORiuShR9Z_oEzKE3zUka2q3A-_ebQphsToDMe5O8sUGlUVnIEM6mw99NXuZNw4"/>
<div class="absolute inset-0 scrim-bottom flex flex-col justify-end p-8">
<h3 class="text-white text-3xl font-black uppercase mb-2">HIIT</h3>
<p class="text-white/70 text-sm mb-4">High-intensity interval training designed to push your VO2 max and ignite metabolism.</p>
</div>
</div>
<!-- Yoga -->
<div class="group relative aspect-[4/5] overflow-hidden rounded-xl bg-slate-900 transition-all duration-500 md:mt-12 hover:-translate-y-2">
<img class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-700" data-alt="serene yoga practitioner in a high-contrast pose against a minimalist industrial backdrop with soft side lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvhm9nN-obeEBUO3smG9CRdd90oXvBmVm-PFNDXNLFvNReOvW9OIZTuJAlBMknUWLBz6di3YN4yvY8oxDVmo0F9zGwjIb9FhTw9QtqqEWgoyobHSKIEs1Frj1OOLO7e2Bou6nZRPa0G-5lHd-dhtG515q_9Y58GI55dKUcW4d_ZLIySnnvKXsTRUBLFssh-i2GOZWAb9LRyrgXw5Cpy4aCsQ3EJGlaWg5UyIEe862KFBYjJjMxcJBy-YDYsCsxg6IWt2mnuXyV9sw"/>
<div class="absolute inset-0 scrim-bottom flex flex-col justify-end p-8">
<h3 class="text-white text-3xl font-black uppercase mb-2">Yoga</h3>
<p class="text-white/70 text-sm mb-4">Precision movement and breathwork to enhance recovery, focus, and structural integrity.</p>
</div>
</div>
<!-- Strength -->
<div class="group relative aspect-[4/5] overflow-hidden rounded-xl bg-slate-900 transition-all duration-500 hover:-translate-y-2">
<img class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-700" data-alt="close up of heavy iron dumbbells on a gym floor with dramatic lighting highlighting the metal texture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBaJJGFPIoYU2sOTfRVJxepkUw9d9FGKgTZAYgd50qHXYrhgfE-wTe_jRpMxwGNAYkP6HPEx0OZN_kuzKCDbkVk1LdbvUFSjVqzYcnYlLRwmliXJ8nHY1-oH93qfYN-8nHvSmOV_E6Eu7QMng6v0j8ZA3ImGWLhjQ9uuwMdTKvMCK0Rp9nc3Xduc7lzdfJXN8M1D1qnNtFh4KT6u34fvhP0Nz-lyUzqEq2XMDt_IefVCY3SY26ABZodIakh0GiiGa3kcn5KscSxUzw"/>
<div class="absolute inset-0 scrim-bottom flex flex-col justify-end p-8">
<h3 class="text-white text-3xl font-black uppercase mb-2">Strength</h3>
<p class="text-white/70 text-sm mb-4">Functional powerlifting and bodybuilding for sustainable muscle growth and raw power.</p>
</div>
</div>
</div>
</section>

    <!-- Locations Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-headline font-bold text-on-background dark:text-inverse-on-surface mb-4">Explore Our Locations</h2>
            <p class="text-lg text-on-surface-variant">Find the perfect spot for your next adventure</p>
        </div>
<!-- Location Section -->
<section class="py-24 bg-surface-container">
<div class="max-w-8xl mx-auto px-12">
    @if($primaryLocation)
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="w-full lg:w-1/2">
                <span class="text-primary font-bold uppercase tracking-widest text-xs">Our Base</span>
                <h2 class="text-4xl font-black tracking-tight text-slate-900 mt-2 mb-6 uppercase">{{ $primaryLocation->name }}</h2>
                <div class="space-y-8">
                    <div class="flex gap-6 items-start">
                        <div class="bg-primary/10 p-4 rounded-lg">
                            <span class="material-symbols-outlined text-primary">location_on</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg text-slate-900">Address</h4>
                            <p class="text-on-surface-variant">{{ $primaryLocation->address ?: 'No address provided' }}</p>
                        </div>
                    </div>
                    @if($primaryLocation->training_hours)
                        <div class="flex gap-6 items-start">
                            <div class="bg-primary/10 p-4 rounded-lg">
                                <span class="material-symbols-outlined text-primary">schedule</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-slate-900">Training Hours</h4>
                                <p class="text-on-surface-variant">{{ $primaryLocation->training_hours }}</p>
                            </div>
                        </div>
                    @endif
                    @if($primaryLocation->training_days)
                        <div class="flex gap-6 items-start">
                            <div class="bg-primary/10 p-4 rounded-lg">
                                <span class="material-symbols-outlined text-primary">calendar_today</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-slate-900">Training Days</h4>
                                <p class="text-on-surface-variant">{{ $primaryLocation->training_days }}</p>
                            </div>
                        </div>
                    @endif
                    @if($primaryLocation->directions)
                        <div class="rounded-3xl border border-outline-variant p-6 bg-white/80 dark:bg-slate-950/80">
                            <h4 class="font-bold text-lg text-slate-900 mb-3">Directions</h4>
                            <p class="text-on-surface-variant">{{ $primaryLocation->directions }}</p>
                        </div>
                    @endif
                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($primaryLocation->address ?: $primaryLocation->name) }}"
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-slate-900 text-white px-8 py-4 rounded-lg font-bold uppercase tracking-widest active:scale-95 transition-transform">
                        Get Directions <span class="material-symbols-outlined text-sm">directions</span>
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 aspect-square lg:aspect-video rounded-xl overflow-hidden shadow-sm">
                <img class="w-full h-full object-cover grayscale brightness-75 hover:grayscale-0 transition-all duration-1000"
                     src="{{ $primaryLocation->image ? asset('storage/' . $primaryLocation->image) : 'https://images.unsplash.com/photo-1526403228236-494e79d9f10c?auto=format&fit=crop&w=1200&q=80' }}"
                     alt="{{ $primaryLocation->name }}"/>
            </div>
        </div>
    @else
        <div class="text-center py-24 rounded-3xl border border-outline-variant bg-white/80 dark:bg-slate-950/80">
            <h3 class="text-3xl font-headline font-bold text-on-background dark:text-inverse-on-surface">No locations available</h3>
            <p class="mt-4 text-on-surface-variant">Check back later for our latest gym locations, directions, and training schedules.</p>
        </div>
    @endif
</div>
</section>

      
    </div>
   </div>
