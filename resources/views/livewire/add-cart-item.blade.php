<div x-data>

    <p class="text-gray-700 mb-3">
        <span class="font-semibold text-lg">
            Stock: {{ $product->quantity }}
        </span>
    </p>

    <div class="flex">
        <div class="mr-4">
            <x-jet-secondary-button disabled x-bind:disabled='$wire.qty <= 1' wire:loading.attr='disabled'
                wire:target='decrement' wire:click='decrement'>-
            </x-jet-secondary-button>

            <span class="mx-2 text-gray-700">{{ $qty }}</span>

            <x-jet-secondary-button x-bind:disabled='$wire.qty >= $wire.quantity' wire:loading.attr='disabled'
                wire:target='increment' wire:click='increment'>+</x-jet-secondary-button>
        </div>
        <div class="flex-1">

            <x-jet-button class="w-full text-center justify-center bg-indigo-500" wire:click='addItem'
                wire:loading.attr='disabled' wire:target='addItem'>
                Agregar al carrito
            </x-jet-button>

        </div>
    </div>
</div>
