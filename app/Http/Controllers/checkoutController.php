<?php

namespace App\Http\Controllers;

use App\Models\transactions;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    public function index()
    {
        return view('landing.checkout');
    }

    public function process(Request $request)
    {
        $orders = Order::where('payment_status', 'processing')->get();

        // Calculate the total price
        $totalPrice = $orders->sum('price');


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
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $totalPrice,
            ),

        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $transaction->snap_token = $snapToken;
        $transaction->save();

        return view('landing.checkout', [
            'transactionId' => $transaction->id_transaction,
            'snapToken' => $snapToken,
            'totalPrice' => $totalPrice,
        ]);
    }
}
