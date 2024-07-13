<?php

namespace App\Http\Controllers\Front;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Alert;

class LandingController extends Controller
{
    public function food()
    {
        $products = Product::whereHas('category', function ($query) {
            $query->where('name', 'Food');
        })->paginate(6);

        $foodCount = Product::whereHas('category', function ($query) {
            $query->where('name', 'Food');
        })->count();

        $drinkCount = Product::whereHas('category', function ($query) {
            $query->where('name', 'Drink');
        })->count();
        $totalOrders = DB::table('orders')->count();
        return view('landing.food', compact('products', 'foodCount', 'drinkCount', 'totalOrders'));
    }

    public function drink()
    {
        $products = Product::whereHas('category', function ($query) {
            $query->where('name', 'Drink');
        })->paginate(6);

        $drinkCount = Product::whereHas('category', function ($query) {
            $query->where('name', 'Drink');
        })->count();

        $foodCount = Product::whereHas('category', function ($query) {
            $query->where('name', 'Food');
        })->count();
        $totalOrders = DB::table('orders')->count();

        return view('landing.drink', compact('products', 'foodCount', 'drinkCount', 'totalOrders'));
    }

    public function cart(Request $request)
    {
        $products = Product::whereHas('category', function ($query) {
            $query->where('name', 'Drink');
        })->paginate(6);

        $drinkCount = Product::whereHas('category', function ($query) {
            $query->where('name', 'Drink');
        })->count();

        $foodCount = Product::whereHas('category', function ($query) {
            $query->where('name', 'Food');
        })->count();




        $totalOrders = DB::table('orders')->count();


        $orders = Order::select('orders.*', 'products.name as product_name')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->paginate(6);


        // Inisialisasi variabel untuk total harga
        $totalPrice = 0;

        // Hitung total harga dari semua produk dalam keranjang
        foreach ($orders as $order) {
            // Tambahkan harga produk dari setiap order ke total harga
            $totalPrice += $order->product->price;
        }

        // Mendapatkan jumlah total order yang sudah ada di tabel 'orders'

        // $transaction = $orders->first();
        // return dd($transaction);

        return view('landing.cart', compact('orders', 'totalOrders', 'foodCount', 'drinkCount', 'totalPrice',));
    }

    public function createOrder(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $price = $product->price;

        // Mulai transaksi database
        DB::transaction(function () use ($request, $product, $price) {
            // Dapatkan produk yang dipesan

            // Periksa stok produk
            if ($product->stock > 0) {


                $transactionId = 'ORD' . now()->format('Ymd') . '_' . \Illuminate\Support\Str::random(8);

                // Buat order baru
                Order::create([
                    'product_id' => $product->id,

                    'payment_status' => 'processing',
                    'price' => $price
                ]);

                // Kurangi stok produk
                $product->decrement('stock', 1);

                // Redirect dengan pesan sukses
                Alert::success('Order Successful!', 'Your order has been placed successfully!');
                return redirect()->back();
            } else {
                // Jika stok tidak mencukupi, kembalikan dengan pesan error
                Alert::error('Order Failed!', 'Sorry, the product stock is not enough.');
                return redirect()->back();
            }
        });

        // Redirect jika ada masalah
        return redirect()->back()->with('error', 'Failed to place order.');
    }

    

    private function getOrders()
    {
        return Order::select('orders.*', 'products.name as product_name')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->paginate(6);
    }

    private function getTotalOrders()
    {
        return DB::table('orders')->count();
    }

    private function getFoodCount()
    {
        return Product::whereHas('category', function ($query) {
            $query->where('name', 'Food');
        })->count();
    }

    private function getDrinkCount()
    {
        return Product::whereHas('category', function ($query) {
            $query->where('name', 'Drink');
        })->count();
    }

    private function calculateTotalPrice()
    {
        $orders = $this->getOrders();
        $totalPrice = 0;

        foreach ($orders as $order) {
            $totalPrice += $order->product->price;
        }

        return $totalPrice;
    }
    public function checkout(Order $transaction)
    {
        $products = config('products');
        $product = collect($products)->firstWhere('id', $transaction->product_id);

        return view('landing.cart',  compact('transaction', 'product'));
    }
}
