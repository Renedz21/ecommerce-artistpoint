<x-app-layout>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="bg-white rounded-lg shadow-lg px-12 py-8 mb-6 flex items-center">
            <div class="relative">
                <div
                    class="{{ $order->status >= 2 && $order->status != 5 ? 'bg-indigo-400' : 'bg-gray-400 ' }} rounded-full h-12 w-12 flex items-center justify-center">
                    <i class='bx bx-check text-white text-3xl font-bold'></i>
                </div>

                <div class=" absolute -left-1.5 mt-0.5">
                    <p>Recibido</p>
                </div>
            </div>

            <div
                class="h-1 flex-1 {{ $order->status >= 3 && $order->status != 5 ? 'bg-indigo-400' : 'bg-gray-400 ' }} mx-2">
            </div>

            <div class="relative">
                <div
                    class="rounded-full h-12 w-12 {{ $order->status >= 3 && $order->status != 5 ? 'bg-indigo-400' : 'bg-gray-400 ' }}flex items-center justify-center">
                    <i class='bx bxs-truck text-white text-3xl font-bold'></i>
                </div>

                <div class=" absolute -left-1.5 mt-0.5">
                    <p>Enviado</p>
                </div>
            </div>

            <div
                class="h-1 flex-1 {{ $order->status >= 4 && $order->status != 5 ? 'bg-indigo-400' : 'bg-gray-400 ' }} mx-2">
            </div>

            <div class="relative">
                <div
                    class="rounded-full h-12 w-12 {{ $order->status >= 4 && $order->status != 5 ? 'bg-indigo-400' : 'bg-gray-400 ' }} flex items-center justify-center">
                    <i class='bx bx-check text-white text-3xl font-bold'></i>
                </div>

                <div class=" absolute -left-2 mt-0.5">
                    <p>Entregado</p>
                </div>
            </div>
        </div>


        <div class="bg-white rounded-lg  shadow-lg px-6 py-4 mb-6">
            <p class="text-gray-700 uppercase">
                <span>
                    {{-- {{ $order->id }} --}}
                    Numero de orden: <span>Orden -{{ $order->id }}</span>
                </span>
            </p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <div class="grid grid-cols-2 gap-6 text-gray-700">
                <div>
                    <p class="text-lg font-semibold uppercase">Envio</p>

                    @if ($order->shipping_type == 1)
                        <p class="text-sm">Los productos deben ser recogidos en tienda</p>
                        <p class="text-sm">Calle falsa 123</p>

                    @else
                        <p class="text-sm">Los productos seran enviados a:</p>
                        <p class="text-sm">{{ $order->address }}</p>
                        <p>{{ $order->department->name }} - {{ $order->city->name }} -
                            {{ $order->district->name }}</p>
                    @endif
                </div>

                <div>
                    <p class="text-lg font-semibold uppercase">Datos de Contacto</p>
                    <p class="text-sm">Persona que recibira el producto: {{ $order->contact }}</p>
                    <p class="text-sm">Telefono de contacto {{ $order->phone }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 text-gray-700">
            <p class="text-xl font-semibold mb-4">Resumen</p>

            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody class="divide-y-gray-300">
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <div class="flex">
                                    <img class="h-15 w-20 rounded-sm object-cover mr-4"
                                        src="{{ $item->options->image }}" alt="">

                                    <article>
                                        <h1 class="font-bold">{{ $item->name }}</h1>
                                        <div class="flex text-sm">
                                            @isset($item->options->color)
                                                Color: {{ $item->options->color }}
                                            @endisset
                                        </div>
                                    </article>
                                </div>
                            </td>
                            <td class="text-center">{{ $item->price }}</td>
                            <td class="text-center">{{ $item->qty }}</td>
                            <td class="text-center">US${{ $item->price * $item->qty }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>



    </div>

</x-app-layout>
