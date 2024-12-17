<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;

class MidtransController extends Controller
{
    public function handleNotification(Request $request)
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');

        $notification = new Notification();

        $transaction = $notification->transaction_status;
        $orderId = $notification->order_id;

        // Update status transaksi berdasarkan status dari Midtrans
        $transaksi = Transaksi::where('order_id', $orderId)->first();
        if ($transaction == 'settlement') {
            $transaksi->status = 'success';
        } elseif ($transaction == 'pending') {
            $transaksi->status = 'pending';
        } elseif ($transaction == 'deny' || $transaction == 'expire' || $transaction == 'cancel') {
            $transaksi->status = 'failed';
        }
        $transaksi->save();

        return response()->json(['message' => 'Notification processed successfully']);
    }
}
