@extends('layouts.store')

@section('content')
    <section class="container py-4 vh-100">
        <div class="row">
            <div class="mx-auto col-10 text-center">
                <h2 class="text-uppercase text-white">{{ $title }}</h2>
            </div>
        </div>

        {{-- <span class="dino-ball-purple position-absolute top-0 end-0" data-aos="fade-down-left"></span> --}}
        <div class="container dino-produtos d-flex flex-wrap justify-content-center">

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
                            @foreach($product->Sizes as $size)
                                @if($size->stock > 0)
                                    <span>{{ $size->number}}</span>
                                @endif
                            @endforeach
                            </div>
                            <div class="color">
                                <h3> R$ :</h3>
                                <h3> {{ $product->price }}</h3>
                            </div>
                            <a href="{{route('show.product', $product->id)}}"> Visualizar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        
        </div>
        {{-- <span class="dino-ball-blue position-absolute bottom-0 start-0" data-aos="fade-up-right"></span> --}}
    </section>
@endsection