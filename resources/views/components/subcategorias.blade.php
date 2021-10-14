@props(['category'])

<div class="grid grid-cols-4 p-4">
    <div>
        <p class="text-lg font-bold text-center text-gray-500 mb-3">SubCategorías</p>
        <ul>
            @foreach ($category->subcategories as $sub)
                <li>
                    <a href=""
                        class="text-gray-700 rounded-xl font-semibold inline-block py-2 px-4 mr-3 hover:text-white hover:bg-blue-600">
                        {{ $sub->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="col-span-3">
        <img class="h-64 w-full object-cover object-center" src="{{ Storage::url($category->image) }}" alt="">
    </div>
</div>
