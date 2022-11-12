<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@extends('head')
@section('title', 'Home')
@section('body')
    @include('navbar')
    <div class="d-flex gap-3 align-items-baseline my-5 justify-content-center flex-wrap align-content-start">
        <div class="card" style="width: 80%">
            <div class="card-body">
                <h2 class="card-title">Hello, my name is {{ $mahasiswa->name }}</h2>
                <h4 class="card-subtitle mb-2 text-muted">GPA: {{ $mahasiswa->gpa }}</h4>
                <h4 class="mt-5 nb-0">My Motto: </h4>
                <h4 class="card-text mt-0">{{ $mahasiswa->motto }}</h4>
            </div>
        </div>
    </div>
    @include('footer')
@endsection
