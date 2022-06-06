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
    <div class="row ">

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
    </div>
</section>
@endsection
