@extends('layouts.store')
@section('content')
<section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('search-brand', $product->Brands->id) }}">{{$product->Brands->name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
        </ol>
      </nav>
</section>
<section class="container py-4">
    <div class="row">
        <div class="col-4 mx-auto text-center">
            <img src="{{ asset($product->image) }}" class="img-fluid">
        </div>
        <div class="mx-auto col-8 text-center">
            <h2 class="text-uppercase">{{ $product->name }}</h2>
            <p class="text-muted">{{ $product->description }}</p>
            <div class="text-center">
                <span>{{ $product->price }}</span>
            </div>
            @foreach($product->Sizes as $size)
                @if($size->stock > 0)
                <form action="{{ route('cart.store', [$product->id, $size->id]) }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm">{{ $size->number}}</button>
                </form>
                @endif
            @endforeach

            <div class="text-center mt-5">
                <h3>Tags</h3>
                @foreach($product->Tags as $tag)
                    <a class="btn btn-sm btn-secondary" href="{{ route('search-tag', $tag->id) }}">{{$tag->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
