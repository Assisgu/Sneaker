@extends('layouts.store')

@section('produtos')
    <section class="container py-4">
        <div class="row">
            <div class="mx-auto col-10 text-center">
                <h2 class="text-uppercase text-white">{{ $title }}</h2>
                <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, nobis!</p>
            </div>
        </div>
        <span class="dino-ball-purple position-absolute top-0 end-0" data-aos="fade-down-left"></span>

        @foreach ($products as $product)    
        <div class="dino-container">
                <div class="dino-card">
                    <div class="dino-img">
                        <img src="{{ asset($product->image) }}" alt="">
                        <h2>{{ $product->name }}</h2>
                    </div>
                    <div class="content">
                        <div class="size">
                                <h3>Size :</h3>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                        </div>
                        <div class="color">
                             <h3> Valor :</h3>
                             <h3> R$ :{{ $product->price }}</h3>
                        </div>
                         <a href="{{route('show.product', $product->id)}}"> Visualizar</a>
                    </div>
                </div>
            </div>
            @endforeach
        <span class="dino-ball-blue position-absolute bottom-0 start-0" data-aos="fade-up-right"></span>

        {{-- <div class="row">
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
        </div> --}}
    </section>
@endsection