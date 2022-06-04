@extends('layouts.store')

@section('video')
                <video controls autoplay loop muted playsinline>
                    <source src="../storage/video/dino.mp4" type="video/mp4">
                </video>
@endsection


@section('content')
    <section class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="mx-auto col-sm-10 col-md-6 col-lg-3">
                <img src="{{ asset($product->image) }}" class="img-fluid">
                <span class="d-block h6 text-center mt-3">{{ $product->name }}</span>
                <div class="text-center">
                    <span class="text-muted">R$ {{ $product->price }}</span>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('show.product', $product->id)}}" class="btn btn-primary btn-sm">Visualizar</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endsection




