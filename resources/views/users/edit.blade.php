@extends('layouts.mainLayout')

@section('container')
    <div class="m-4 row justify-content-center align-items-center">
        <div class="col-lg-5 border border-2 rounded rounded-4 p-5">
            <main class="form-register w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Edit Profile</h1>
                <form action="/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-floating mb-4 ">
                        <input type="text" name="name" class="form-control rounded rounded-4 @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name', $user->name) }}">
                        <label for="name">Nama</label>

                        @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4 ">
                        <input type="text" name="username" class="form-control rounded rounded-4 @error('username') is-invalid @enderror" id="username" placeholder="Username"  value="{{ old('username', $user->username) }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-4 ">
                        <input type="email" name="email" class="form-control rounded rounded-4 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email', $user->email) }}" disabled>
                        <label for="email">Email address</label>
                        @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4 ">
                        <input type="text" name="username" class="form-control rounded rounded-4 @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username', $user->username) }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4 ">
                        <input type="text" name="phone" class="form-control rounded rounded-4 @error('phone') is-invalid @enderror" id="phone" placeholder="phone" value="{{ old('phone', $user->phone) }}">
                        <label for="phone">Phone</label>
                        @error('phone')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4 ">
                        <input type="text" name="address" class="form-control rounded rounded-4 @error('address') is-invalid @enderror" id="address" placeholder="address" value="{{ old('address', $user->address) }}">
                        <label for="address">Address</label>
                        @error('address')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control rounded rounded-4 @error('password') is-invalid @enderror" id="password" placeholder="New-Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-warning w-100 py-2" type="submit">Update Profile</button>
                </form>
                
            </main>
        </div>
    </div>
@endsection
