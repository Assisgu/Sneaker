@extends('layouts.app')

@section('content')


<div class="container my-4">
    <h4 class="text-uppercase d-flex justify-content-center"> Tags excluidas</h4>
    <a class="btn btn-md btn-secondary float-end my-3" href="{{route('brand.index')}}">Voltar</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>                
                <th>Produtos</th>   
                <th>Restaurar</th>              
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <td>{{$brand->id}}</td>
                <td>{{$brand->name}}</td>                
                <td>{{$brand->Products->count()}}</td>                
                <td><a href="{{route('brand.restore', $brand->id)}}" class="btn btn-sm btn-success text-decoration-none">Restaurar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
