@extends('layouts.mainLayout')

@section('container')
    <div class="m-4 row justify-content-center align-items-center">
        @if (\Session::has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ \Session::get('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (\Session::has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ \Session::get('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="col-md-5 border border-2 rounded rounded-4 p-5">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating mb-4 ">
                        <input type="email" name="email" class="form-control rounded rounded-4 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
                        <label for="email">Email address</label>
                        @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control rounded rounded-4 @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-warning w-100 py-2" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Belum Daftar? <a href="/register">Daftar Sekarang!</a></small>
            </main>
        </div>
    </div>
@endsection
