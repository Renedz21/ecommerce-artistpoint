<div>
    <div class="flex flex-col max-w-3xl mx-auto p-6 space-y-4 sm:p-10 bg-gray-50 text-gray-800">
        <h2 class="text-xl font-semibold">Tu carrito de compras</h2>

        @if (Cart::count())
            <ul class="flex flex-col divide-y divide-gray-300">

                @foreach (Cart::content() as $item)
                    <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                        <div class="flex w-full space-x-2 sm:space-x-4">
                            <img class="flex-shrink-0 object-cover w-20 h-20 border-transparent rounded outline-none sm:w-32 sm:h-32 bg-gray-500"
                                src="{{ $item->options->image }}" alt="Polaroid camera">
                            <div class="flex flex-col justify-between w-full pb-4">
                                <div class="flex justify-between w-full pb-2 space-x-2">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-semibold leading-snug mb-4 capitalize sm:pr-8">
                                            {{ $item->name }}
                                        </h3>

                                        @if ($item->options->color)
                                            <p class="text-sm text-gray-600 mb-3 font-semibold capitalize">Color:
                                                {{ $item->options->color }}</p>
                                        @endif

                                        <p class="text-sm text-gray-600 font-semibold">
                                            Cantidad:
                                            {{-- {{  }} --}}
                                            @if ($item->options->color)
                                                @livewire('update-cart-item-color', ['rowId' => $item->rowId],
                                                key($item->rowId))
                                            @else
                                                @livewire('update-cart-item', ['rowId' => $item->rowId],
                                                key($item->rowId))
                                            @endif
                                        </p>
                                    </div>
                                    <div class="text-right my-auto">
                                        <p class="text-lg font-semibold">USD$ {{ $item->price * $item->qty }}</p>
                                        {{-- <p class="text-sm line-through text-gray-400">75.50€</p> --}}
                                    </div>
                                </div>
                                <div class="flex text-sm divide-x justify-end">
                                    <button type="button" wire:click="delete('{{ $item->rowId }}')"
                                        class="flex items-center px-2 py-1 space-x-1 bg-red-400 rounded-lg text-white hover:bg-red-700"
                                        wire:loading.class='text-white opacity-25'
                                        wire:target='delete("{{ $item->rowId }}")'>
                                        <i class='bx bx-trash text-base'></i>
                                        <span class=" text-base">Remover</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div class="space-y-1 text-right">
                <p>Precio total:
                    <span class="font-semibold">{{ Cart::subTotal() }}</span>
                </p>
                <p class="text-sm text-gray-600">No incluye costos de envio</p>
            </div>

            <div class="flex justify-end space-x-20">
                <button type="button" wire:click="destroy"
                    class="px-6 py-2 border rounded-md bg-red-600 text-gray-50 border-red-600 hover:bg-red-800">
                    <i class='bx bx-trash'></i>
                    <span class="sr-only sm:not-sr-only">Vaciar</span> carrito
                </button>
                <button type="button"
                    class="px-6 py-2 border rounded-md border-indigo-600 hover:bg-indigo-600 hover:text-white">Seguir
                    <span class="sr-only sm:not-sr-only">comprando</span>
                </button>
                <a href="{{ route('orders.create') }}"
                    class="px-6 py-2 border rounded-md bg-indigo-600 text-gray-50 border-indigo-600 hover:bg-indigo-800">
                    <span class="sr-only sm:not-sr-only">Realizar</span> pedido
                </a>
            </div>
        @else

            <div class="flex flex-col items-center">
                <i class='bx bx-cart text-4xl text-gray-600'></i>
                <p class="text-lg text-gray-700 mt-4">TU CARRITO DE COMPRAS ESTA VACIO</p>

                <x-button-enlace href="/" class="mt-4 px-16">
                    IR AL INICIO
                </x-button-enlace>

            </div>

        @endif
    </div>
</div>
