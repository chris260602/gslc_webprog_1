<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@extends('head')
@section('title', 'Home')
@section('body')
    @include('navbar')
    <div class="d-flex gap-3 align-items-baseline my-5 justify-content-center flex-wrap align-content-start">
        @foreach ($datas as $data)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $data->code }}</h6>
                    <p class="card-text">{{ $data->desc }}</p>
                    <a href={{ $data->link }} class="card-link mr-3">Course link</a>
                    @if ($data->eligible == true)
                        <span class="badge badge-success">Eligible</span>
                    @elseif ($data->eligible == false)
                        <span class="badge badge-danger">Not Eligible</span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    @include('footer')
@endsection
