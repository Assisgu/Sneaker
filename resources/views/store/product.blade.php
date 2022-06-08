@extends('layouts.store')
@section('content')
<section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb container ">
            <li class="breadcrumb-item pt-4" aria-current="page"><a href="{{ route('search-brand', $product->Brands->id) }}">{{$product->Brands->name}}</a></li>
            <li class="breadcrumb-item active pt-4" aria-current="page">{{$product->name}}</li>
        </ol>
      </nav>
</section>

<section class="container vh-100 text-white d-flex align-items-center ">
    
    
    <div class=" text-white position-absolute top-50 start-50 translate-middle dino-show pt-5 " data-aos="fade-right"> 
        <div class="dino-show-img ">
            <img src="{{ asset($product->image) }}" alt="">
        </div>
        <div class="dino-show-info">
            <h2 class="pt-5 text-uppercase"> {{ $product->name }}</h2>
            <h3 class="py-1 text-uppercase"> Descrição</h3>
            <p class="px-3 dino-desc"> {{ $product->description }} </p>
            <span class="dino-price"> R$ {{ $product->price }}</span>
            
            <div class="dino-num px-3">
                <span>Sizes </span> 
                @foreach($product->Sizes as $size)
                    @if($size->stock > 0)
                    <form action="{{ route('cart.store', [$product->id, $size->id]) }}" method="POST" style="display:inline">
                        @csrf
                        <button type="submit" class="btn btn-light btn-sm ">{{ $size->number}}</button>
                    </form>
                    @endif
                @endforeach
            </div>

            <div class="dino-tags px-3">
                <span> Tags </span> 
                @foreach($product->Tags as $tag)
                    <a class="btn btn-sm btn-light" href="{{ route('search-tag', $tag->id) }}">{{$tag->name}}</a>
                @endforeach
            </div>
            
        </div>
    </div>
    
    
    {{-- <div class="row ">

        <div class="col-6 mx-auto text-center center bg-dark ">
            <img src="{{ asset($product->image) }}" class="img-fluid">
        </div>
        <div class="mx-auto col-6 text-center bg-white">
            <h2 class="text-uppercase text-dark mt-3">{{ $product->name }}</h2>
            <p class="text-muted">{{ $product->description }}</p>
            <div class="text-center text-dark">
                <span>R$:{{ $product->price }}</span>
            </div>
            @foreach($product->Sizes as $size)
                @if($size->stock > 0)
                <form action="{{ route('cart.store', [$product->id, $size->id]) }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm ">{{ $size->number}}</button>
                </form>
                @endif
            @endforeach

            <div class="">
                <h3 class="text-dark">Tags</h3>
                @foreach($product->Tags as $tag)
                    <a class="btn btn-sm btn-secondary" href="{{ route('search-tag', $tag->id) }}">{{$tag->name}}</a>
                @endforeach
            </div>
        </div>
    </div> --}}
</section>
@endsection
