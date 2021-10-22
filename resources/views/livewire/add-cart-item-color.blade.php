<div x-data>

    <p class="text-gray-700 mb-3">
        <span class="font-semibold text-lg">
            Stock:
            @if ($quantity)
                {{ $quantity }}
            @else
                {{ $product->stock }}
            @endif
        </span>
    </p>

    <p class="text-xl text-gray-700">Color</p>

    <select wire:model="color_id"
        class="border-gray-100 focus:border-indigo-700 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
        <option value="" selected disabled>Seleccionar un color</option>
        @foreach ($colors as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>

    <div class="flex mt-4">
        {{-- <div class="mr-4">
            <x-jet-secondary-button disabled x-bind:disabled='$wire.qty <= 1' wire:loading.attr='disabled'
                wire:target='decrement' wire:click='decrement'>-
            </x-jet-secondary-button>

            <span class="mx-2 text-gray-700">{{ $qty }}</span>

            <x-jet-secondary-button x-bind:disabled='$wire.qty >= $wire.quantity' wire:loading.attr='disabled'
                wire:target='increment' wire:click='increment'>+</x-jet-secondary-button>
        </div>
        <div class="flex-1">
            <x-jet-button wire:click='addItem' wire:loading.attr='disabled' wire:target='addItem'
                class="w-full text-center justify-center bg-indigo-500">
                Agregar al carrito
            </x-jet-button>
        </div> --}}



        <div class="mr-4">
            <x-jet-secondary-button disabled x-bind:disabled='$wire.qty <= 1' wire:loading.attr='disabled'
                wire:target='decrement' wire:click='decrement'>-
            </x-jet-secondary-button>

            <span class="mx-2 text-gray-700">{{ $qty }}</span>

            <x-jet-secondary-button x-bind:disabled='$wire.qty >= $wire.quantity' wire:loading.attr='disabled'
                wire:target='increment' wire:click='increment'>+</x-jet-secondary-button>
        </div>
        <div class="flex-1">

            {{-- <x-jet-button class="w-full text-center justify-center bg-indigo-500" >
                Agregar al carrito
            </x-jet-button> --}}
            <x-jet-button x-bind:disabled='!$wire.quantity' wire:click='addItem' wire:loading.attr='disabled'
                wire:target='addItem' class="w-full text-center justify-center bg-indigo-500">
                Agregar al carrito
            </x-jet-button>
        </div>
    </div>
</div>
