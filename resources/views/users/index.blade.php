@extends('layouts.mainLayout')

@section('container')
    <div id="menu" class="menu p-4 page-hero text-center">
        <div class="section-header">
            <h2>{{ $page }}</h2>
        </div>
    </div>
    @if (\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ \Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container mt-4 d-flex align-items-center justify-content-center flex-column">
    
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-6 text-center">
                @if (!empty($user->image))
                    <img src="assets/image/{{ $user->image }}" alt="Foto {{ $user->name }}" width="200" class="img-thumbnail rounded-circle">
                @else
                    <img src="assets/image/user.png" alt="Foto {{ $user->name }}" width="200" class="img-thumbnail rounded-circle">
                @endif
            </div>
            <div class="col-12 col-lg-6">
                <h3>Username : {{ $user->name }}</h3>
                <p>Email : {{ $user->email }}</p>
                <p>No HP : {{ $user->phone }}</p>
                <p>Alamat : {{ $user->address }}</p>

                <br>
                <br>
                <br>
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            </div>
        </div>
    </div>
@endsection
