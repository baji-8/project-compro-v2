@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <div class="py-5">
        <h1 class="display-4 fw-bold">Selamat Datang di Compro V2</h1>
        <p class="lead text-muted">Website company profile minimalis dengan fitur Admin & Live Chat.</p>
        <button class="btn btn-primary btn-lg px-4">Mulai Sekarang</button>
    </div>
</div>

<div class="container py-5">
    <div class="row text-center mb-5">
        <h2>Layanan Kami</h2>
    </div>
    <div class="row">
        @foreach(\App\Models\Service::all() as $service)
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm p-4">
                <div class="text-primary mb-3">
                    <i class="bi {{ $service->icon }} fs-1"></i>
                </div>
                <h4>{{ $service->title }}</h4>
                <p class="text-muted">{{ $service->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container py-5 bg-light">
    <div class="row text-center mb-5">
        <h2>Portfolio Terbaru</h2>
    </div>
    <div class="row">
        @foreach(\App\Models\Portfolio::all() as $portfolio)
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <img src="{{ asset('storage/' . $portfolio->image) }}" class="card-img-top" alt="{{ $portfolio->title }}">
                <div class="card-body">
                    <h5>{{ $portfolio->title }}</h5>
                    <p class="text-muted small">{{ $portfolio->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection