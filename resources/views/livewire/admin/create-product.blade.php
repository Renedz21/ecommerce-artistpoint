<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-gray-700">
    <h1 class=" text-2xl text-center font-semibold mb-8">Productos</h1>

    <div class="grid grid-cols-2 gap-6 mb-4">
        <div>
            <x-jet-label value="Categorias" />
            <select class="w-full form-control" wire:model="category_id">
                <option value="" selected disabled>Seleccione una categoria</option>

                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>

            <x-jet-input-error for="category_id" />
        </div>

        <div>
            <x-jet-label value="Sub-categorias" />
            <select class="w-full form-control" wire:model="subcategory_id">
                <option value="" selected disabled>Seleccione una subcategoria</option>

                @foreach ($subcategories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            <x-jet-input-error for="subcategory_id" />
        </div>
    </div>

    <div class="mb-4">
        <x-jet-label value="Nombre" />
        <x-jet-input type="text" placeholder="Ingrese el nombre del producto" class="w-full" wire:model="name" />
        <x-jet-input-error for="name" />
    </div>

    <div class="mb-4">
        <x-jet-label value="Slug" />
        <x-jet-input type="text" placeholder="Slug del producto" class="w-full bg-gray-200" wire:model="slug" disabled />
        <x-jet-input-error for="slug" />
    </div>

    <div class="mb-4">
        <x-jet-label value="Descripcion" />
        <textarea name="" class="w-full form-control" cols="30" rows="4" wire:model="description" x-data></textarea>
        <x-jet-input-error for="description" />
    </div>

    <div class="grid grid-cols-2 gap-6 mb-4">
        <div>
            <x-jet-label value="Marca" />
            <select class="form-control w-full" wire:model="brand_id">
                <option value="" selected disabled>Seleccione una marca</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            <x-jet-input-error for="brand_id" />
        </div>

        <div>
            <x-jet-label value="Precio" />
            <x-jet-input type="number" class="w-full" step=".01" wire:model="price" />
            <x-jet-input-error for="price" />
        </div>

    </div>


    @if ($subcategory_id)

        @if (!$this->subcategory->color)

            <div>
                <x-jet-label value="Cantidad" />
                <x-jet-input type="number" class="w-full" wire:model="quantity" />
                <x-jet-input-error for="quantity" />
            </div>

        @endif

    @endif

    <div class="flex mt-4">
        <x-jet-button wire:loading.attr='disable' wire:target='save' class="ml-auto" wire:click="save">
            Crear producto
        </x-jet-button>
    </div>


</div>
