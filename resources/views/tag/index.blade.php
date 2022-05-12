@extends('layouts.app')

@section('content')
<a class="btn btn-md btn-secondary float-end me-2" href="{{route('tag.trash')}}">Restaurar Tag</a>
<a class="btn btn-md btn-success float-end me-2" href="{{route('tag.create')}}">Adicionar Tag</a>

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
            @foreach($tags as $tag)
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->name}}</td>                
                <td>{{$tag->Products->count()}}</td>                
                <td><a href="{{route('tag.edit', $tag->id)}}" class="btn btn-sm btn-warning text-decoration-none">Editar</a></td>
                <td><a href="{{route('tag.destroy', $tag->id)}}" class="btn btn-sm btn-danger text-decoration-none">Esgotada</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
