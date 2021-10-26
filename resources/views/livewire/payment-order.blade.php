<div>

    <div class="grid grid-cols-5 gap-5 container py-8 mx-auto">
        <div class="col-span-3">
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

        <div class="col-span-2">
            <div class="bg-white rounded-lg shadow-lg px-6 pt-6 text-gray-700">
                <div class="flex justify-between items-center mb-4">
                    <img class="object-cover w-21 h-20" src="{{ asset('img/pago.png') }}" alt="">

                    <div>
                        <p class="font-semibold uppercase">
                            Subtotal: USD${{ $order->total - $order->shipping_cost }}
                        </p>

                        <p class="font-semibold uppercase">
                            Envio: {{ $order->shipping_cost }}
                        </p>

                        <p class="font-semibold uppercase">
                            Total: USD${{ $order->total }}
                        </p>
                    </div>

                </div>
                <div id="paypal-button-container"></div>


                {{-- <a class="px-6 py-2 mt-5 mb-5 rounded-lg bg-indigo-600 border-indigo-600 text-white hover:bg-indigo-800"
                        href="{{ route('inicio') }}">
                        Volver a inicio
                    </a> --}}
            </div>
        </div>
    </div>



    @push('script')
        <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}&currency=USD">
        </script>


        <script>
            paypal.Buttons({

                // Sets up the transaction when a payment button is clicked
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '{{ $order->total }}' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                            }
                        }]
                    });
                },

                // Finalize the transaction after payer approval
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(orderData) {

                        Livewire.emit('payOrder');

                        // Successful capture! For dev/demo purposes:
                        // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        // var transaction = orderData.purchase_units[0].payments.captures[0];

                        // console.log(orderData);
                        // alert('Transaction ' + transaction.status + ': ' + transaction.id +
                        //     '\n\nSee console for all available details');
                    });
                }
            }).render('#paypal-button-container');
        </script>
    @endpush
</div>
