@extends('layouts.app')

@section('content')
<a class="btn btn-md btn-secondary float-end me-2" href="{{route('product.trash')}}">Restaurar Tênis</a>
<a class="btn btn-md btn-success float-end me-2" href="{{route('product.create')}}">Adicionar Tênis</a>
<div class="container mt-2">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome </th>                
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
                <td><a href="{{route('product.edit', $product->id)}}" class="btn btn-sm btn-warning text-decoration-none">Editar</a></td>                
                <td><a href="{{route('product.destroy', $product->id)}}" class="btn btn-sm btn-danger text-decoration-none">Apagar</a></td>                
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
