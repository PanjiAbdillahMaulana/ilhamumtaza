@extends('layouts.mainLayout')

@section('container')
    <div id="menu" class="menu p-4 page-hero text-center">
        <div class="section-header">
            <h2>{{ $page }}</h2>
        </div>
    </div>

    @if ($page == 'All Products')
        <div class="m-5 border border-2 rounded rounded-4">
            <div class="text-center">
                <p class="h1">Kategori Produk</p>
            </div>
            <div class="mt-2 mb-3 d-flex flex-column flex-md-row justify-content-around align-items-center">
                @foreach ($categories as $category)
                    <div class="card">
                        <div class="card-body text-center d-flex align-items-center justify-content-center">
                            <a href="categories/{{ $category->slug }}" class="category-link-product raunded rounded-4 p-3">
                                <h3 class="card-title"> {{ $category->name }} </h3>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    @if ($products->count())
        <div class="m-5 border border-2 rounded rounded-4">
            <div class="text-center">
                <p class="h1">Produk </p>
            </div>

            <div class="row align-items-center justify-content-center">
                @foreach ($products as $product)
                    {{-- jangan lupa tambah css untuk mengatur style anchor nya --}}
                    <div class="col-lg-4 col-md-6 col-12 p-2 d-flex justify-content-center">
                        <div class="card card-product" style="width: 18rem;">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top border-bottzom" alt="...">
                            @else
                                <img src="https://dummyimage.com/1000x1000/343a40/6c757d" class="card-img-top" alt="...">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->product }}</h5>
                                <p><a href="/categories/{{ $product->category->slug }}" class="category-link">Kategori Produk : {{ $product->category->name }}</a></p>
                                <p class="card-text">{{ $product->detail }}</p>
                                <a href="/products/{{ $product->slug }}" class="btn btn-warning icon-product1"><i class="bi bi-eye-fill"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="text center d-flex justify-content-center mt-4">
            <p class="fs-3">Not Found.</p>
        </div>
    @endif

    {{-- all produk dan search maka keluarkan ini --}}
    @if ($page == 'All Products' || $page == 'Pencarian : ' . request('search'))
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    @endif



@endsection
