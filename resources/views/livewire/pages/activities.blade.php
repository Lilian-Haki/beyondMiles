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
            @forelse($upcomingEvents as $event)
                <div class="rounded-xl overflow-hidden border border-outline-variant! dark:border-slate-800! shadow-sm hover:shadow-lg transition-shadow duration-300 bg-surface-container-low dark:bg-surface-container-high">
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

                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 pt-4 border-t border-outline-variant dark:border-slate-800">
                            <span class="text-lg font-headline font-bold text-primary">{{ $event->price > 0 ? '$' . number_format($event->price, 2) : 'Free' }}</span>
                            <div class="flex flex-wrap gap-3">
                                <a href="tel:+254757151520" class="inline-flex items-center justify-center px-4 py-2 rounded-lg bg-primary text-on-primary hover:bg-primary-fixed-dim font-semibold transition-colors"><i class="material-symbols-outlined ml-2">phone</i></a>
                                <a href="sms:+254757151520?body=I%27m%20interested%20in%20booking%20{{ urlencode($event->name) }}" class="inline-flex items-center justify-center px-4 py-2 rounded-lg bg-surface-container-high text-on-surface hover:bg-surface-container-low transition-colors"><i class="material-symbols-outlined ml-2">message</i></a>
                                <a href="https://wa.me/+254757151520?text={{ urlencode('Hi, I am interested in booking ' . $event->name) }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-4 py-2 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
<path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
</svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <p class="text-xl text-on-surface-variant dark:text-slate-400">No upcoming activities available at this time.</p>
                </div>
            @endforelse
        </div>

        @if($upcomingEvents->hasPages())
            <div class="mt-12">
                {{ $upcomingEvents->links() }}
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
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    @forelse($pastEvents as $event)
        <div class="group relative rounded-xl overflow-hidden border! border-outline-variant! dark:border-slate-800! shadow-sm! hover:shadow-lg! transition-shadow duration-300 bg-surface-container-lowest">
            <div class="aspect-[4/5] overflow-hidden bg-surface-container-high">
                <img src="{{ $event->image ? asset('storage/' . $event->image) : 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80' }}"
                     alt="{{ $event->name }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"/>
            </div>
            <div class="p-6 bg-surface dark:bg-surface-container">
                <div class="flex items-center justify-between mb-3">
                    <span class="inline-block px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container text-[10px] font-bold uppercase tracking-wider">{{ ucfirst($event->status) }}</span>
                    <span class="text-xs font-label font-semibold text-on-surface-variant">{{ $event->event_date?->format('M d, Y') ?? 'TBD' }}</span>
                </div>
                <h3 class="text-xl font-headline font-bold mb-2 text-on-surface dark:text-on-background">{{ $event->name }}</h3>
                <p class="text-sm text-on-surface-variant dark:text-slate-400 mb-4">{{ Str::limit($event->description, 80) }}</p>
                <div class="grid grid-cols-2 gap-4 text-[13px] text-on-surface-variant dark:text-slate-400">
                    <div>
                        <p class="font-semibold text-on-surface">Location</p>
                        <p>{{ $event->location ?: 'TBD' }}</p>
                    </div>
                    <div>
                        <p class="font-semibold text-on-surface">Capacity</p>
                        <p>{{ $event->capacity }}</p>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-full text-center py-16">
            <p class="text-xl text-on-surface-variant dark:text-slate-400">No past adventures have been recorded yet.</p>
        </div>
    @endforelse
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
<p class="text-on-surface-variant max-w-md">Get exclusive early access to expedition bookings and upcoming events.</p>
</div>
<div class="w-full md:w-auto relative z-10">
<form class="flex flex-col md:flex-row gap-4">
<input class="bg-surface-bright border-none px-6 py-4 rounded-lg focus:ring-2 focus:ring-primary w-full md:w-80 font-bold uppercase text-xs tracking-widest" placeholder="Your email" type="email"/>
<button class="bg-primary text-on-primary font-black uppercase text-xs tracking-[0.2em] px-10 py-4 rounded-lg hover:bg-slate-900 hover:text-white transition-all">Enlist</button>
</form>
</div>
</div>
</section>
</div>
</body>
</html>
