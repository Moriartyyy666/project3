@extends('home.index')

@section('content')
    <div class="container">
        <div style="margin-top: 5%">
            <div class="d-flex align-items-center gap-2">
                <img src="{{ asset($view->foto) }}" class="img-fluid" alt="{{ $view->foto }}" style="max-width: 50px;">
                <span class="fs-5 fw-bold">{{ $view->nama_produk }}</span>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">Detail Produk</h5>
                            <h8><i>Deskripsi:</i></h8>
                            <p><b>{{ $view->deskripsi }}</b></p>
                            <h8><i>Kategori:</i></h8>
                            <p><b>{{ $view->kategori->name }}</b></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h6 class="card-title">Pilih Langganan:</h6>
                            <form method="POST" action="{{ route('dashboard.produk.store', $view->nama_produk) }}">
                                @csrf
                                <input type="hidden" name="produk_id" value="{{ $view->id }}">
                                <!-- Hidden Produk ID -->
                                @foreach ($view->harga as $hargas)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="durasi"
                                            id="durasi{{ $loop->index }}" value="{{ $hargas->durasi }}">
                                        <label class="form-check-label" for="durasi{{ $loop->index }}">
                                            Rp.{{ number_format($hargas->harga, 0, ',', '.') }} / {{ $hargas->durasi }}
                                        </label>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary mt-3">Bayar Sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
