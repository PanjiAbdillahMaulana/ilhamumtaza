@extends('dashboard.layouts.main')

@section('container')
<div class="mt-3">
    <a href="/dashboard/products" class="btn btn-success"><i class="bi bi-arrow-left-square me-2"></i>Back to all post</a>
    <a href="/dashboard/products/{{ $product->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
    <form action="/dashboard/products/{{ $product->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger border-0" onclick="return confirm('Yakin menghapus')"><i class="bi bi-x-circle"></i>Delete</button>
    </form>
</div>
<div class="mt-2 ">
    <div class="row align-items-center justify-content-center">
        {{-- jangan lupa tambah css untuk mengatur style anchor nya --}} 
        <div class="col-lg-4 col-md-6 col-12 p-2 d-flex justify-content-center">
            <div class="card card-product text-center" style="width: 18rem;">
                @if ($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top border-bottzom" alt="...">
                @else
                    <img src="https://dummyimage.com/1000x1000/343a40/6c757d" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->product }}</h5>
                    <p><a href="/categories/{{ $product->category->slug }}" class="category-link">Kategori Produk : {{ $product->category->name }}</a></p>
                    <p class="card-text">Harga : Rp.{{ $product->price }}</p>
                    <p class="card-text">Stock :{{ $product->stock }}</p>
                    <p class="card-text">{{ $product->detail }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
