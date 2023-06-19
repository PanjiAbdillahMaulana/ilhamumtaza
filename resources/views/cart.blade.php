@extends('layouts.mainLayout')

@section('container')
    <div id="menu" class="menu p-4 page-hero text-center">
        <div class="section-header">
            <h2>{{ $page = 'Cart' }}</h2>
        </div>
    </div>


    <div class="m-5 border border-2 rounded rounded-4">
        <div class="text-center">
            <p class="h1">Isi Keranjang Kamu</p>
        </div>
        @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ \Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Product</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($cartItems as $cartItem)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cartItem->product->product }}</td>
                            <td>{{ $cartItem->quantity }}</td>
                            <td>Rp.{{ number_format($cart->total, 2, ',', '.') }}</td>
                            <td>
                                <form action="/cart/{{ $cartItem->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Yakin menghapus')"><i
                                            class="bi bi-x-circle"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
