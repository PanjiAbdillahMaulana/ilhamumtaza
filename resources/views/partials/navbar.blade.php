<nav class="navbar navbar-expand-md bg-white sticky-top navigation-container">
    <div class="container-md">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('/assets/image/logo-ilhamumtaza.png') }}" alt="Logo Ilhamumtaza" height="40">


        </a>
        <div class="me-auto d-flex align-items-center justify-content-center">
            @auth
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user mx-md-1 mx-2 " style="font-size:24px"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        @can('admin')
                            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                        @endcan
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item border-top" type="submit">
                                    <i class="bi bi-box-arrow-left"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                <a href="/cart" class="ikon pe-2">
                    @php
                    $notif = 0;
                    if(auth()->check()) {
                        $cart = \App\models\Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();
                        if($cart) {
                            $notif = \App\models\CartItem::where('cart_id', $cart->id)->count();
                        }
                    }
                @endphp
                    <i class="fa fa-shopping-cart mx-md-1 mx-2" style="font-size:24px"></i><span class="badge text-bg-danger">{{ $notif }}</span>
                </a>
            @else
                <a href="/login" class="ikon d-flex align-items-center">
                    <i class="bi bi-box-arrow-in-right mx-md-1 mx-2 " style="font-size:24px"></i>Login
                </a>
            @endauth
            {{-- modal search --}}
            <i type="button" class="fa fa-search mx-md-3 mx-2" style="font-size:22px; color:#252525;"
                data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navigasi" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $page === 'Home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $page === 'About' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $page === 'All Products' ? 'active' : '' }}" href="/products">Product's</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ $page === 'Contact' ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal untuk pencarian-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pencarian</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="d-flex" action="/products">
                    <input type="text" class="form-control me-2" placeholder="Cari Produk..." name="search">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>
