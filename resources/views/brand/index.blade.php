@extends('layouts.app')

@section('content')


<div class="container py-4">
    <h4 class="text-uppercase d-flex justify-content-center"> Gerenciador de marcas </h4>
    <a class="btn btn-md btn-secondary float-end  my-3"  href="{{route('brand.trash')}}">Restaurar </a>
    <a class="btn btn-md btn-success float-end me-4 my-3" href="{{route('brand.create')}}">Nova Marca </a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>                
                <th>Produtos</th>
                <th>Editar</th>   
                <th>Deletar</th>   
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <td>{{$brand->id}}</td>
                <td>{{$brand->name}}</td>                
                <td>{{$brand->Products->count()}}</td>                
                <td><a href="{{route('brand.edit', $brand->id)}}" class="btn btn-sm btn-warning text-decoration-none">Editar</a></td>
                <td><a href="{{route('brand.destroy', $brand->id)}}" class="btn btn-sm btn-danger text-decoration-none">Esgotado</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
