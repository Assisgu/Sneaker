@extends('layouts.app')

@section('content')
<a class="btn btn-md btn-secondary float-end me-2" href="{{route('brand.trash')}}">Restaurar Marca</a>
<a class="btn btn-md btn-success float-end me-2" href="{{route('brand.create')}}">Adicionar Marca </a>

<div class="container mt-2">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>                
                <th>QTD Tênis</th>                
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
