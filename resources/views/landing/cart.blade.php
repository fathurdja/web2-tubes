@extends('layouts.app2')



@section('Content2')
    <div class="flex justify-between items-center">
        <p class="text-3xl font-bold">Orders</p>


        <!-- Other form fields -->
        <button class="bg-red-600 text-white font-bold py-2 px-4 rounded" type="submit" id="pay-button">
            Checkout
        </button>


    </div>
    <div class="bg-white border mt-7 border-borderPrimary rounded-xl">
        <table class="w-[130vh]">
            <thead class="text-left">
                <tr class="border-b border-borderPrimary">
                    <th class="py-4 pl-8">No</th>
                    <th class="">Product</th>
                    <th class="">Price</th>
                    <th class="">Created at</th>


                </tr>
            </thead>
            <tbody class="  font-semibold">
                @foreach ($orders as $index => $order)
                    <tr class="border-b border-b-borborder-borderPrimary">
                        <td class="py-6 pl-8">
                            {{ $index + 1 }}</td>
                        <td>{{ ucwords($order->product_name) }}</td>
                        <td>Rp{{ number_format($order->price, 0, ',', '.') }}</td>
                        <td>{{ $order->created_at }}</td>

                    </tr>
                @endforeach
                <tr class="border-b border-b-borborder-borderPrimary">
                    <td class="py-6 pl-8">Total order : Rp.{{ $totalPrice }}</td>
                </tr>
            </tbody>
            <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
            <script type="text/javascript">
                document.getElementById('pay-button').onclick = function() {
                    // SnapToken acquired from previous step
                    snap.pay('{{ $snapToken }}', {
                        // Optional
                        onSuccess: function(result) {
                            window.location.href = '{{ route('success') }}'
                        },
                        // Optional
                        onPending: function(result) {
                            /* You may add your own js here, this is just example */
                            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        },
                        // Optional
                        onError: function(result) {
                            /* You may add your own js here, this is just example */
                            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        }
                    });
                };
            </script>
        @endsection
