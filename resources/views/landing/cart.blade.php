<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/admin.css')
    <title>Meow Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('images/inr.ico') }}" type="image/x-icon" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <main class="py-[75px] px-[70px] bg-backgroundPrimary min-h-screen flex gap-16">
        <div>
            <p class="text-3xl font-bold">
                <span class="text-primary">Meow</span>Cafe
            </p>
            <aside class="min-h-full p-6 mt-6 bg-white w-72 rounded-xl">
                <p class="font-bold">Category</p>
                <div class="flex flex-col mt-4 gap-y-1">
                    <a href="{{ route('home') }}"
                        class="flex justify-between px-4 py-3 font-bold rounded text-textPrimary">
                        <div>
                            <i class="mr-3 ri-restaurant-line"></i>
                            <span>Food</span>
                        </div>
                        <span class="text-primary/80">{{ $foodCount }}</span>
                    </a>
                    <a href="{{ route('drink') }}"
                        class="flex justify-between px-4 py-3 font-semibold rounded text-textPrimary">
                        <div>
                            <i class="mr-3 ri-goblet-line"></i>
                            <span>Drink</span>
                        </div>
                        <span class="text-textPrimary/60">{{ $drinkCount }}</span>
                    </a>
                    <a href="{{ route('cart') }}"
                        class="flex justify-between px-4 py-3 font-semibold rounded  bg-primary/20 text-primary">
                        <div>
                            <i class="mr-3 ri-shopping-cart-line"></i>
                            <span>Cart</span>
                        </div>
                        <span class="text-textPrimary/60">{{ $totalOrders }}</span>
                    </a>
                </div>
            </aside>
        </div>
        <main class="p-7 bg-backgroundPrimary min-h-screen w-full mt-[30px]">
            <div class="flex justify-between items-center">
                <p class="text-3xl font-bold">Orders</p>
                <form action="{{ route('checkout') }}" method="POST">
                    @csrf
                    <!-- Other form fields -->
                    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded" type="submit" id="pay-button">
                        Checkout
                    </button>
                </form>

            </div>
            <div class="bg-white border mt-7 border-borderPrimary rounded-xl">
                <table class="w-full">
                    <thead class="text-left">
                        <tr class="border-b border-borderPrimary">
                            <th class="py-4 pl-8">No</th>
                            <th class="">Product</th>
                            <th class="">Price</th>


                        </tr>
                    </thead>
                    <tbody class="table-row-group font-semibold">
                        @foreach ($orders as $index => $order)
                            <tr class="border-b border-b-borborder-borderPrimary">
                                <td class="py-6 pl-8">
                                    {{ $index + 1 }}</td>
                                <td>{{ ucwords($order->product_name) }}</td>
                                <td>Rp{{ number_format($order->price, 0, ',', '.') }}</td>



                            </tr>
                        @endforeach
                        <tr class="border-b border-b-borborder-borderPrimary">
                            <td class="py-6 pl-8">Total order : Rp.{{ $totalPrice }}</td>
                        </tr>
                    </tbody>
        </main>
        @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
</body>

</html>
