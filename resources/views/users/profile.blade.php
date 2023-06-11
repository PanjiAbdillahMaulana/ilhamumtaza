@extends('layouts.mainLayout')

@section('container')
    <h1>Halaman Profile</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="assets/image/{{ $image }}" alt="Foto {{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection