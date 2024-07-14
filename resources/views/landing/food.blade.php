@extends('layouts.app2')

@section('Content2')
   
<p class="text-3xl font-bold">Menu</p>
        <section class="grid grid-cols-3 gap-6 mt-6">

            @foreach ($products as $product)
                <div class="overflow-hidden bg-white rounded-xl">
                    <div class="max-h-[300px] overflow-hidden object-cover object-center">
                        <img src="{{ asset('storage/images/products/' . $product->image) }}" alt="{{ $product->name }}"
                            class="object-cover w-full h-56" />
                    </div>
                    <div class="p-5">
                        <p class="font-bold">{{ ucwords($product->name) }}</p>
                        <p class="font-bold text-[14px] text-primary">
                            {{ 'Rp' . number_format($product->price, 0, ',', '.') }}</p>
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="py-2 px-9 mt-3 bg-[#E2EAF8] rounded-xl font-bold text-bold">
                                Pesan
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

        </section>

        <div class="mt-5">
            {{ $products->links() }}
        </div>


    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
@endsection
