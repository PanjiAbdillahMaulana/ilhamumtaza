@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My products</h1>
    </div>

    @if (\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ \Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive small">
        <a href="/dashboard/products/create" class="btn btn-primary mb-3">Add New Product</a>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->product }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-info">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="/dashboard/products/{{ $product->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin menghapus')"><i class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
