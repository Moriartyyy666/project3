@extends('home.index')

@section('content')
    <div class="container mt-5">
        <h3>Proses Pembayaran</h3>
        <p>Order ID: {{ $transaksi->order_id }}</p>
        <p>Total:
            Rp.{{ number_format($transaksi->produk->sum('harga'), 0, ',', '.') }}
        </p>
        <button id="pay-button" class="btn btn-primary">Bayar Sekarang</button>

        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
        </script>
        <script type="text/javascript">
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function() {
                snap.pay('{{ $snapToken }}', {
                    onSuccess: function(result) {
                        alert("Pembayaran berhasil!");
                        console.log(result);
                        window.location.href = '/'; // Redirect setelah sukses
                    },
                    onPending: function(result) {
                        alert("Menunggu pembayaran!");
                        console.log(result);
                    },
                    onError: function(result) {
                        alert("Pembayaran gagal!");
                        console.log(result);
                    },
                    onClose: function() {
                        alert('Anda menutup popup pembayaran!');
                    }
                });
            });
        </script>
    </div>
@endsection
