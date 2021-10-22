@props(['item'])

<li class="bg-white rounded-lg shadow">
    <article>
        <figure>
            <img class="h-48 w-full object-cover object-center" src="{{ Storage::url($item->images->first()->url) }}"
                alt="">
        </figure>

        <div class="px-6 py-4">
            <h1 class="text-lg font-semibold">
                <a class="hover:text-indigo-500" href="{{ route('products.details', $item) }}">
                    {{ Str::limit($item->name, 20) }}
                </a>
            </h1>

            <p class="font-bold text-gray-700">$ {{ $item->price }}</p>
        </div>
    </article>
</li>
