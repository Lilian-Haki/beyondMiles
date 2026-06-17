<div>
    {{-- CART ICON TRIGGER (put this in your navbar) --}}
    <button wire:click="$set('open', true)" class="relative p-2">
        <span class="material-symbols-outlined">shopping_bag</span>
        @if($count > 0)
            <span class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-primary text-on-primary text-xs flex items-center justify-center font-bold">
                {{ $count }}
            </span>
        @endif
    </button>

    {{-- BACKDROP --}}
    @if($open)
        <div
            class="fixed inset-0 bg-black/40 z-40 transition-opacity"
            wire:click="$set('open', false)"
        ></div>
    @endif

    {{-- DRAWER --}}
    <div
        class="fixed top-0 right-0 h-full w-full max-w-md bg-white dark:bg-background-dark shadow-2xl z-50 flex flex-col transition-transform duration-300 {{ $open ? 'translate-x-0' : 'translate-x-full' }}"
    >
        {{-- Header --}}
        <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant dark:border-slate-700">
            <h2 class="text-lg font-bold font-headline">Your Cart ({{ $count }})</h2>
            <button wire:click="$set('open', false)" class="p-1 rounded hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        {{-- Items --}}
        <div class="flex-1 overflow-y-auto px-6 py-4 space-y-4">
            @forelse($cart as $id => $item)
                <div class="flex gap-4 items-start">
                    {{-- Image --}}
                    <div class="w-16 h-16 rounded-lg overflow-hidden bg-slate-100 flex-shrink-0">
                        @if($item['image'])
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-secondary to-secondary-container flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-secondary text-sm">inventory_2</span>
                            </div>
                        @endif
                    </div>

                    {{-- Details --}}
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-sm truncate">{{ $item['name'] }}</p>
                        <p class="text-primary font-bold text-sm">KES {{ number_format($item['price'], 2) }}</p>

                        {{-- Quantity controls --}}
                        <div class="flex items-center gap-2 mt-2">
                            <button wire:click="decrement({{ $id }})" class="w-7 h-7 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-container-high transition-colors text-sm">−</button>
                            <span class="text-sm font-medium w-5 text-center">{{ $item['quantity'] }}</span>
                            <button wire:click="increment({{ $id }})" class="w-7 h-7 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-container-high transition-colors text-sm">+</button>
                        </div>
                    </div>

                    {{-- Line total + remove --}}
                    <div class="text-right flex-shrink-0">
                        <p class="text-sm font-bold">KES {{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                        <button wire:click="remove({{ $id }})" class="text-xs text-red-500 hover:text-red-700 mt-1 transition-colors">Remove</button>
                    </div>
                </div>
            @empty
                <div class="flex flex-col items-center justify-center h-48 text-on-surface-variant">
                    <span class="material-symbols-outlined text-4xl mb-2">shopping_bag</span>
                    <p class="text-sm">Your cart is empty</p>
                </div>
            @endforelse
        </div>

        {{-- Footer --}}
        @if(count($cart) > 0)
            <div class="px-6 py-4 border-t border-outline-variant dark:border-slate-700 space-y-3">
                <div class="flex justify-between text-sm text-on-surface-variant">
                    <span>Subtotal</span>
                    <span class="font-bold text-on-surface dark:text-white">KES {{ number_format($total, 2) }}</span>
                </div>
                
                    href="{{ route('checkout.index') }}"
                    class="block w-full text-center py-3 rounded-xl bg-primary text-on-primary font-semibold hover:bg-primary-fixed-dim transition-colors"
                >
                    Proceed to Checkout
                </a>
            </div>
        @endif
    </div>
</div>