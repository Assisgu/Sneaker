@extends('layouts.app')

@section('content')
<a class="btn btn-lg btn-success float-end me-5" href="{{route('product.create')}}">Criar Produto</a>

<div class="container mt-2">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Produto</th>
                <th>Descrição</th>
                <th>Preço</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>                
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
