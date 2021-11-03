<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-gray-700">
    <h1 class=" text-2xl text-center font-semibold mb-8">Productos</h1>

    <div class="grid grid-cols-2 gap-6 mb-4">
        <div>
            <x-jet-label value="Categorias" />
            <select class="w-full form-control" wire:model="product.category_id">
                <option value="" selected disabled>Seleccione una categoria</option>

                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>

            <x-jet-input-error for="product.category_id" />
        </div>

        <div>
            <x-jet-label value="Sub-categorias" />
            <select class="w-full form-control" wire:model="product.subcategory_id">
                <option value="" selected disabled>Seleccione una subcategoria</option>

                @foreach ($subcategories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            <x-jet-input-error for="product.subcategory_id" />
        </div>
    </div>

    <div class="mb-4">
        <x-jet-label value="Nombre" />
        <x-jet-input type="text" placeholder="Ingrese el nombre del producto" class="w-full"
            wire:model="product.name" />
        <x-jet-input-error for="product.name" />
    </div>

    <div class="mb-4">
        <x-jet-label value="Slug" />
        <x-jet-input type="text" placeholder="Slug del producto" class="w-full bg-gray-200" wire:model="product.slug"
            disabled />
        <x-jet-input-error for="product.slug" />
    </div>

    <div class="mb-4">
        <x-jet-label value="Descripcion" />
        <textarea name="" class="w-full form-control" cols="30" rows="4" wire:model="product.description"
            x-data></textarea>
        <x-jet-input-error for="product.description" />
    </div>

    <div class="grid grid-cols-2 gap-6 mb-4">
        <div>
            <x-jet-label value="Marca" />
            <select class="form-control w-full" wire:model="product.brand_id">
                <option value="" selected disabled>Seleccione una marca</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            <x-jet-input-error for="product.brand_id" />
        </div>

        <div>
            <x-jet-label value="Precio" />
            <x-jet-input type="number" class="w-full" step=".01" wire:model="product.price" />
            <x-jet-input-error for="product.price" />
        </div>

    </div>

    @if (!$this->subcategory->color)

        <div>
            <x-jet-label value="Cantidad" />
            <x-jet-input type="number" class="w-full" wire:model="product.quantity" />
            <x-jet-input-error for="product.quantity" />
        </div>

    @endif


    <div class="flex mt-4">
        <x-jet-button wire:loading.attr='disable' wire:target='save' class="ml-auto" wire:click="save">
            Actualizar producto
        </x-jet-button>
    </div>


</div>
