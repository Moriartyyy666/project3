<?php

namespace App\Http\Controllers;

use App\Models\Harga;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi;
use Midtrans\Config;
use Midtrans\Snap;

class HomeController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('home.dashboard', compact('produk'));
    }

    public function produk($nama_produk, $id)
    {
        $view = Produk::where('nama_produk', $nama_produk)->firstOrFail();
        $transaksi = Transaksi::with('produk')->find($id);
        return view('home.produk', compact('view', 'transaksi'));
    }

    public function produkStore(Request $request)
    {
        $user = Auth::id();
        $produk_id = $request->input('produk_id');
        $durasi = $request->input('durasi');

        if (!$produk_id || !$durasi) {
            return redirect()->back()->withErrors('Produk dan durasi harus dipilih.');
        }

        $harga = Harga::where('produk_id', $produk_id)
            ->where('durasi', $durasi)
            ->first();

        if (!$harga) {
            return redirect()->back()->withErrors('Harga tidak ditemukan untuk produk dan durasi yang dipilih.');
        }

        // Buat transaksi di database
        $transaksi = Transaksi::create([
            'user_id' => $user,
            'produk_id' => $produk_id,
            'order_id' => uniqid('ORDER-'),
            'status' => 'pending',
            'durasi' => $durasi,
        ]);

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        // Data untuk pembayaran
        $params = [
            'transaction_details' => [
                'order_id' => $transaksi->order_id,
                'gross_amount' => (int) $harga->harga, // Pastikan nilai angka
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        // Buat token pembayaran
        $snapToken = Snap::getSnapToken($params);

        return view('home.payment', compact('snapToken', 'transaksi'));
    }
}
