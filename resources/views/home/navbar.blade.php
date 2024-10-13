<!-- Responsive navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #c5769f;">
    <div class="container">
        <a class="navbar-brand" href="#beranda">
            <img src="{{ asset('img/logo-lalsstore.png') }}" alt="Logo"
                class="navbar-logo d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#beranda"
                        style="color: rgb(255, 255, 255);">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#kategori" style="color: white;">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#informasi" style="color: white;">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#kontak" style="color: white;">Kontak</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="btn btn-primary nav-link" href="{{ route('logout') }}"
                                style="color: white;">Logout</a>
                        </li>
                    @else
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-primary nav-link" href="" style="color: white;">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
