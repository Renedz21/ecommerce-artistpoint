<div>
    <div class="flex flex-col max-w-3xl mx-auto p-6 space-y-4 sm:p-10 bg-gray-50 text-gray-800">
        <h2 class="text-xl font-semibold">Tu carrito de compras</h2>
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
                                        <p class="text-sm text-gray-600 font-semibold">Color:
                                            {{ $item->options->color }}</p>
                                    @endif

                                    <p class="text-sm text-gray-600 font-semibold">
                                        {{-- {{  }} --}}
                                        @if ($item->options->color)
                                            @livewire('update-cart-item-color', ['rowId' => $item->rowId],
                                            key($item->rowId))
                                        @else
                                            @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId))
                                        @endif
                                    </p>
                                </div>
                                <div class="text-right my-auto">
                                    <p class="text-lg font-semibold">USD$ {{ $item->price * $item->qty }}</p>
                                    {{-- <p class="text-sm line-through text-gray-400">75.50€</p> --}}
                                </div>
                            </div>
                            <div class="flex text-sm divide-x">
                                <button type="button"
                                    class="flex items-center px-2 py-1 space-x-1 bg-red-400 rounded-lg text-white hover:bg-red-700">
                                    <i class='bx bx-trash text-base'></i>
                                    <span class=" text-base">Remover</span>
                                </button>
                                {{-- <button type="button" class="flex items-center px-2 py-1 space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="w-4 h-4 fill-current">
                                        <path
                                            d="M453.122,79.012a128,128,0,0,0-181.087.068l-15.511,15.7L241.142,79.114l-.1-.1a128,128,0,0,0-181.02,0l-6.91,6.91a128,128,0,0,0,0,181.019L235.485,449.314l20.595,21.578.491-.492.533.533L276.4,450.574,460.032,266.94a128.147,128.147,0,0,0,0-181.019ZM437.4,244.313,256.571,425.146,75.738,244.313a96,96,0,0,1,0-135.764l6.911-6.91a96,96,0,0,1,135.713-.051l38.093,38.787,38.274-38.736a96,96,0,0,1,135.765,0l6.91,6.909A96.11,96.11,0,0,1,437.4,244.313Z">
                                        </path>
                                    </svg>
                                    <span>Add to favorites</span>
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach



            <!---->
        </ul>
        <div class="space-y-1 text-right">
            <p>Precio total:
                <span class="font-semibold">{{ $item->subtotal }}</span>
            </p>
            <p class="text-sm text-gray-600">No incluye costos de envio</p>
        </div>
        <div class="flex justify-end space-x-4">
            <button type="button"
                class="px-6 py-2 border rounded-md border-indigo-600 hover:bg-indigo-600 hover:text-white">Seguir
                <span class="sr-only sm:not-sr-only">comprando</span>
            </button>
            <button type="button"
                class="px-6 py-2 border rounded-md bg-indigo-600 text-gray-50 border-indigo-600 hover:bg-indigo-800">
                <span class="sr-only sm:not-sr-only">Realizar</span> pedido
            </button>
        </div>
    </div>
</div>
