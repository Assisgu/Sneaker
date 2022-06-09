@extends('layouts.app')

@section('content')


<div class="container py-4">
    <h4 class="text-uppercase d-flex justify-content-center">Produtos esgotados</h4>
    <a class="btn btn-md btn-secondary float-end  my-3" href="{{route('product.index')}}">Voltar</a>
    <table class="table table-dark ">
        <thead>
            <tr>
            <th>ID</th>
                <th>Nome</th>  
                <th> Imagem </th>              
                <th>Descrição</th>
                <th>Preço</th>
                <th>Restaurar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td><img src="{{asset($product->image)}}" style="width: 4vw; height: 4vh;" alt=""></td>                
                <td>{{$product->description}}</td>                                
                <td>{{$product->price}}</td>                                
                <td><a href="{{route('product.restore', $product->id)}}" class="btn btn-sm btn-success text-decoration-none">Restaurar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection