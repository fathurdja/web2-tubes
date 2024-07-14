<?php

namespace App\Http\Controllers;

use App\Models\transactions;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class checkoutController extends Controller
{
    public function index()
    {
        // $orders = Order::select('orders.*', 'products.name as product_name')
        //     ->join('products', 'orders.product_id', '=', 'products.id')
        //     ->where('orders.payment_status', 'processing')
        //     ->get();

        // // Calculate the total price
        // $totalPrice = $orders->sum('price');

        // return view('landing.cart', compact('orders', 'totalPrice'));
    }

    public function process(Request $request)

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
        ->where('orders.payment_status', 'processing')
        ->get();
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
        $order = Order::where('payment_status', 'processing')->get();

        // Calculate the total price
        $totalPrice = $order->sum('price');
      

        $transaction = transactions::create([
            'id_transaction' => uniqid(),
            'total_price' => $totalPrice,

        ]);
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $itemDetails = $orders->map(function ($order) {
            return [
                'id' => $order->product_id,
                'price' => $order->price,
                'quantity' => 1,
                'name' => $order->product_name
            ];
        })->toArray();

        // $params = array(
        //     'transaction_details' => array(
        //         'order_id' => rand(),
        //         'product'=>$orders->product_name,
        //         'gross_amount' => $totalPrice,
        //     ),

        // );

        $params = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => $totalPrice,
            ],
            'item_details' => $itemDetails,
        ];
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $transaction->snap_token = $snapToken;
        $transaction->save();

        return view('landing.cart', [
            'transactionId' => $transaction->id_transaction,
            'snapToken' => $snapToken,
            'totalPrice' => $totalPrice,
            'orders' => $orders,
            'foodCount' => $foodCount,
            'drinkCount' => $drinkCount,
            'totalOrders' => $totalOrders
            
        ],);
    }
}
