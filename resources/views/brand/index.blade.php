@extends('layouts.app')

@section('content')
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
