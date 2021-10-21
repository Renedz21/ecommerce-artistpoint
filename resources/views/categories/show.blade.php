<x-app-layout>
    <section class="bg-white dark:bg-gray-900">

        <div class="container px-6 py-8 mx-auto">
            <figure class="mb-5">
                <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($category->image) }}" alt="">
            </figure>

            @livewire('category-filter', ['category' => $category])


        </div>
    </section>


</x-app-layout>
