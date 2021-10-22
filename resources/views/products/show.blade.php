<x-app-layout>
    {{-- <div class="flex flex-wrap w-1/2">
        @foreach ($product->images as $item)
            <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block"
                    src="{{ Storage::url($item->url) }}">
            </div>
        @endforeach
    </div> --}}

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">
        <div
            class="max-w-2xl  mx-auto py-6 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8 lg:grid-cols-2">

            <div class="grid grid-cols-2  grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                @foreach ($product->images as $item)
                    <img src="{{ Storage::url($item->url) }}"
                        alt="Walnut card tray with white powder coated steel divider and 3 punchout holes."
                        class="bg-gray-100 rounded-lg">
                @endforeach
            </div>

            <div class="-mt-5 p-4 ">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    {{ $product->name }}
                </h2>
                <p class="mt-4 text-gray-500">
                    {{ $product->description }}
                </p>

                <div class="mt-2 flex items-center justify-between">
                    <h1 class="text-2xl my-auto font-bold tracking-tight text-gray-800">Valoracion</h1>
                    <p class="text-xl font-semibold">
                        5 <i class='bx bxs-star text-yellow-500'></i>
                    </p>
                </div>


                <div class="mt-2 mb-2 flex items-center justify-between">
                    <h1 class="text-2xl my-auto font-bold tracking-tight text-gray-800">Precio</h1>
                    <p class="text-xl font-semibold text-indigo-700">
                        USD$ {{ $product->price }}
                    </p>
                </div>

                <dl class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-b mb-2 border-gray-200 p-2">
                        <dt class="font-bold text-lg text-gray-900">Marca</dt>
                        <dd class="mt-2 text-base text-indigo-600 underline capitalize hover:text-indigo-500"><a
                                href="">{{ $product->brand->name }}</a>
                        </dd>
                    </div>

                    <div class="border-t border-b mb-2 border-gray-200 p-2">
                        <dt class="font-bold text-lg text-gray-900">Categoria</dt>
                        <dd class="mt-2 text-base text-gray-600">
                            {{ $product->subcategory->name }}
                        </dd>
                    </div>

                </dl>

                <div class="bg-white rounded-lg shadow-lg mt-2 mb-4">
                    <div class="p-4 flex items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-700">
                            <i class='bx bxs-truck text-sm text-white'></i>
                        </span>

                        <div class="ml-4">
                            <p class="text-indigo-700 font-semibold text-lg">Se hacen envios a todo el Perú</p>
                            <p class="text-indigo-700 font-semibold text-sm">Recibe el producto el dia
                                {{ Date::now()->addDay(7)->locale('es')->format('l j F') }}</p>
                        </div>
                    </div>
                </div>

                @if ($product->subcategory->color)
                    @livewire('add-cart-item-color', ['product' => $product])
                @else
                    @livewire('add-cart-item', ['product' => $product])
                @endif


            </div>
        </div>
    </div>


</x-app-layout>
