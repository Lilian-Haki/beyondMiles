@extends('layouts.app')

@section('title', 'Gym & Locations - Beyond Miles')

@section('content')
<div class="min-h-screen bg-background dark:bg-inverse-surface">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-primary to-tertiary text-on-primary">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-headline font-bold mb-6">
                    Our Gym & Locations
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-primary-fixed-dim">
                    Discover our premium fitness facilities and adventure locations across the region
                </p>
            </div>
        </div>
    </div>

    <!-- Locations Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-headline font-bold text-on-background dark:text-inverse-on-surface mb-4">Explore Our Locations</h2>
            <p class="text-lg text-on-surface-variant">Find the perfect spot for your next adventure</p>
        </div>

        @if($locations->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($locations as $location)
                    <div class="bg-surface-container-low dark:bg-surface-container-high rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <!-- Location Image -->
                        <div class="relative h-48 bg-surface-container-high">
                            @if($location->image)
                                <img src="{{ asset('storage/' . $location->image) }}"
                                     alt="{{ $location->name }}"
                                     class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-primary to-tertiary flex items-center justify-center">
                                    <svg class="w-16 h-16 text-on-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute top-4 right-4">
                                <span class="bg-surface-container-high bg-opacity-90 text-on-surface-variant px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $location->type }}
                                </span>
                            </div>
                        </div>

                        <!-- Location Content -->
                        <div class="p-6 bg-surface dark:bg-surface-container">
                            <h3 class="text-xl font-headline font-bold text-on-surface dark:text-on-background mb-2">{{ $location->name }}</h3>
                            <p class="text-on-surface-variant mb-4">{{ $location->description }}</p>

                            <!-- Location Details -->
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-on-surface-variant">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    {{ $location->address }}
                                </div>
                                @if($location->phone)
                                    <div class="flex items-center text-on-surface-variant">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                        {{ $location->phone }}
                                    </div>
                                @endif
                                @if($location->email)
                                    <div class="flex items-center text-on-surface-variant">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        {{ $location->email }}
                                    </div>
                                @endif
                            </div>

                            <!-- Status Badge -->
                            @if($location->is_active)
                                <span class="inline-block bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                    Active
                                </span>
                            @else
                                <span class="inline-block bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                    Inactive
                                </span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <svg class="mx-auto h-24 w-24 text-on-surface-variant" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <h3 class="mt-4 text-lg font-medium text-on-background dark:text-inverse-on-surface">No locations available</h3>
                <p class="mt-2 text-on-surface-variant">Check back later for our amazing locations!</p>
            </div>
        @endif
    </div>

    <!-- Call to Action -->
    <div class="bg-primary text-on-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h2 class="text-3xl font-headline font-bold mb-4">Ready for Your Next Adventure?</h2>
                <p class="text-xl mb-8 text-primary-fixed-dim">
                    Join us at one of our premium locations and experience the thrill of adventure
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('activities') }}"
                       class="bg-surface text-on-surface hover:bg-surface-variant px-8 py-3 rounded-lg font-medium transition-colors duration-200">
                        View Activities
                    </a>
                    <a href="{{ route('shop') }}"
                       class="bg-tertiary text-on-tertiary hover:bg-tertiary-container px-8 py-3 rounded-lg font-medium transition-colors duration-200">
                        Shop Gear
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection