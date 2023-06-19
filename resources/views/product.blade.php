@extends('layouts.mainLayout')

@section('container')
    <div class="ms-5">
        <button onclick="goBack()" class="btn p-2 d-flex align-items-center" style="font-size: 1.5rem"><i  class="bi bi-arrow-left-circle" style="font-size: 2rem"></i>Back</button>
    </div>
    <div class="mx-5 mb-3 ">
        @if (\Session::has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ \Session::get('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (\Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ \Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row align-items-center justify-content-center">
            {{-- jangan lupa tambah css untuk mengatur style anchor nya --}}
            <div class="col-lg-4 col-md-6 col-12 p-2 d-flex justify-content-center">
                <div class="card card-product text-center" style="width: 18rem;">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top border-bottzom"
                            alt="...">
                    @else
                        <img src="https://dummyimage.com/1000x1000/343a40/6c757d" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product }}</h5>
                        <p><a href="/categories/{{ $product->category->slug }}" class="category-link">Kategori Produk : {{ $product->category->name }}</a></p>
                        <p class="card-text">Harga : Rp.{{ number_format($product->price, 2, ',', '.') }}</p>
                        <p class="card-text">Stok : {{ $product->stock }}</p>
                        <p class="card-text">{{ $product->detail }}</p>
                    </div>

                    <div class="my-2 border-top">
                        <form action="/cart/{{ $product->id }}" method="POST" class="mx-2">
                            @csrf
                            <label for="quantity" class="text-success">Masukan Jumlah Pesanan :</label>
                            <input type="text" name="quantity" class="form-control mb-3" required value="1">
                            <button class="btn btn-success border-0"><i class="bi bi-cart-plus"></i> Tambahkan ke keranjang</button>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            history.back();
        }
    </script>
@endsection
