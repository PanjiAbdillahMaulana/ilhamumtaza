@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add new product</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/products" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Product image</label>
                <img class="img-preview img-fluid mb-3 col-sm-4">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Product</label>
                <input type="text" class="form-control @error('product') is-invalid @enderror" id="product"
                    placeholder="rempeyek ikan" name="product" value="{{ old('product') }}" required>
                @error('product')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                    placeholder="rempeyek-ikan" name="slug" value="{{ old('slug') }}" required>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">detail</label>
                <input type="text" class="form-control @error('detail') is-invalid @enderror" id="detail"
                    placeholder="rempeyek ikan enak sekali" name="detail" value="{{ old('detail') }}" required>
                @error('detail')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add product</button>
        </form>

    </div>


    <script>
        const product = document.querySelector("#product");
        const slug = document.querySelector("#slug");

        product.addEventListener("keyup", function() {
            let preslug = product.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });
        function previewImage(){
            const image = document.querySelector("#image");
            const  imgPreview = document.querySelector(".img-preview");

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
