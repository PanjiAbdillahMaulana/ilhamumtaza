@extends('layouts.mainLayout')

@section('container')
    <div class="m-4 row justify-content-center align-items-center">
        <div class="col-lg-5 border border-2 rounded rounded-4 p-5">
            <main class="form-register w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating mb-4 ">
                        <input type="text" name="name" class="form-control rounded rounded-4 @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Nama</label>

                        @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4 ">
                        <input type="text" name="username" class="form-control rounded rounded-4 @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-4 ">
                        <input type="email" name="email" class="form-control rounded rounded-4 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
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
                        @error('password')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-warning w-100 py-2" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>
@endsection
