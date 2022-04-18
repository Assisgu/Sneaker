@extends('layouts.app')

@section('content')
<section class="container mt-2 text-center">

    <form class="text-center row justify-content-center d-flex" action="{{route('product.edit', $product->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Nome Produto" type="text" name="name" value="{{$product->name}}" required>
        </div>  

        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Descrição" type="text" name="description" value="{{$product->description}}" required>
        </div>
        
        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Price" type="number" step="0.1" name="price" value="{{$product->price}}" required>
        </div>

        <div class="col-7">
            Selecione uma marca:
            <select class="form-select" name="brand_id" required>
                @foreach($brands as $brand)
                <option value="{{$brand->id}}" {{$product->brand_id == $brand->id ? 'selected' : ''}}>{{$brand->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-lg w-50 btn-success mt-3 mb-2" type="submit">Alterar</button>
    </form>
</section>
@endsection