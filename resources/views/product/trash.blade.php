@extends('layouts.app')

@section('content')
<a class="btn btn-md btn-dark float-end me-2" href="{{route('product.index')}}">Voltar a Lista</a>

<div class="container mt-2">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>ID</th>
                <th>Nome</th>  
                <th> Imagem </th>              
                <th>Descrição</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td><img src="{{asset($product->image)}}" style="width: 35px; height: 35px;" alt=""></td>                
                <td>{{$product->description}}</td>                                
                <td>{{$product->price}}</td>                                
                <td><a href="{{route('product.restore', $product->id)}}" class="btn btn-sm btn-success text-decoration-none">Restaurar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection