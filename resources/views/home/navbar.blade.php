<!-- Responsive navbar -->
<nav class="fixed-top navbar navbar-expand-lg navbar-light" style="background-color: #c5769f;">
    <div class="container">
        <a class="navbar-brand" href="#beranda">
            <img src="{{ asset('img/logo-lalsstore.png') }}" alt="Logo"  width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#beranda" style="color: #fff;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#informasi" style="color: #fff;">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#produk" style="color: #fff;">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#kontak" style="color: #fff;">Kontak</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
