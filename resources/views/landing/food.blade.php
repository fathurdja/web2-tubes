<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/admin.css')
    <title>MeowCafes Food Menu</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="flex">
            <div class="w-1/4">
                <div class="p-5 bg-white rounded-lg shadow-md">
                    <h4 class="mb-4 text-lg font-bold">Category</h4>
                    <ul class="list-none">
                        <li class="flex items-center justify-between py-2">
                            <span>Food</span>
                            <span class="px-3 py-1 text-white bg-blue-500 rounded-full"></span>
                        </li>
                        <li class="flex items-center justify-between py-2">
                            <a href="{{ route('drink') }}" class="hover:text-blue-500">Drink</a>
                            <span class="px-3 py-1 text-white bg-blue-500 rounded-full"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-3/4 ml-6">
                <h4 class="mb-4 text-xl font-bold">Food Menu</h4>
                <div class="grid grid-cols-3 gap-6">
                    {{-- @foreach($products as $product)
                        <div class="p-5 bg-white rounded-lg shadow-md">
                            <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" class="object-cover w-full h-40 rounded-lg">
                            <h5 class="mt-4 text-lg font-bold">{{ $product->name }}</h5>
                            <p class="mt-2 text-blue-500">{{ 'Rp' . number_format($product->price, 0, ',', '.') }}</p>
                            <form action="{{ route('order.store') }}" method="POST" class="mt-4">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-full">Pesan</button>
                            </form>
                        </div>
                    @endforeach --}}
                </div>
            </div>
        </div>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="flex items-center w-full p-3 rounded-md">
                <i class="mr-4 text-lg ri-logout-circle-line"></i>
                <span class="font-semibold">Logout</span>
            </button>
        </form>
    </div>
</body>
</html>
