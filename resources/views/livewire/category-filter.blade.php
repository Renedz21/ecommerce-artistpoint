<div class="mb-5">
    <div class="px-8 py-4 mx-auto bg-white rounded-lg shadow-lg mb-6">
        <div class="flex items-center justify-between">
            <h1 class="font-semibold text-gray-700 uppercase text-2xl">
                {{ $category->name }}
            </h1>

            <div class="grid grid-cols-2 border border-gray-300 divide-x divide-gray-300">
                <i class='bx bx-grid-alt p-3 font-semibold text-2xl text-gray-700 cursor-pointer'></i>
                <i class='bx bx-list-ul p-3 font-semibold text-2xl text-gray-700 cursor-pointer'></i>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-5 gap-7">
        <aside>


            <h2 class="font-semibold text-center mb-2">Subcategorias</h2>

            <ul class="divide-y divide-gray-200">
                @foreach ($category->subCategories as $item)
                    <li class="py-2 text-sm mx-auto">
                        <a wire:click="$set('subcategoria', '{{ $item->name }}')"
                            class="block cursor-pointer font-semibold text-gray-700 text-lg hover:underline hover:text-indigo-700 {{ $subcategoria == $item->name ? 'text-indigo-600 font-semibold' : '' }}">
                            {{ $item->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <h2 class="font-semibold text-center mt-5 mb-2">Marcas</h2>
            <ul class="divide-y divide-gray-200">
                @foreach ($category->brands as $brand)
                    <li class="py-2 text-sm mx-auto">
                        <a wire:click="$set('marca', '{{ $brand->name }}')"
                            class="block cursor-pointer font-semibold text-gray-700 text-lg hover:underline hover:text-indigo-700 {{ $marca == $brand->name ? 'text-indigo-600 font-semibold' : '' }}">
                            {{ $brand->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <x-jet-button class="mt-4 mx-auto" wire:click="limpiar">
                Eliminar Filtros
            </x-jet-button>

        </aside>

        <div class="col-span-4">
            <ul class="grid grid-cols-4 gap-4">
                @foreach ($products as $item)
                    <x-product-list :item="$item" />
                @endforeach
            </ul>
            <div class="mt-4">
                {{ $products->links() }}
            </div>

        </div>
    </div>
</div>
