<x-app-layout>
    <div class="container py-8 mx-auto">
        @foreach ($categories as $category)
            <section class="mb-6">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-gray-700">
                        {{ $category->name }}
                    </h1>
                    <a href="{{ route('categorias-mostrar', $category) }}"
                        class="text-indigo-500 ml-3 font-semibold hover:text-indigo-800 hover:underline">Ver
                        más</a>
                </div>

                @livewire('category-products', ['category' => $category])
            </section>
        @endforeach
    </div>

    @push('script')
        <script>
            Livewire.on('glider', function(id) {
                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 5.5,
                    slidesToScroll: 5,
                    draggable: true,
                    dots: '.glider-' + id + '~.dots',
                    arrows: {
                        prev: '.glider-' + id + '~.glider-prev',
                        next: '.glider-' + id + '~.glider-next'
                    }
                });
            })
        </script>
    @endpush

</x-app-layout>
