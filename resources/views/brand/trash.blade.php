@extends('layouts.app')

@section('content')
<a class="btn btn-md btn-dark float-end me-2" href="{{route('brand.index')}}">Voltar a Lista Marcas</a>

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
                <td><a href="{{route('brand.restore', $brand->id)}}" class="btn btn-sm btn-success text-decoration-none">Restaurar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
