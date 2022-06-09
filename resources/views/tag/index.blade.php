@extends('layouts.app')

@section('content')


<div class="container py-4">
    <h4 class="text-uppercase d-flex justify-content-center"> Gerenciador de tags </h4>
    <a class="btn btn-md btn-secondary float-end  my-3" href="{{route('tag.trash')}}">Restaurar</a>
    <a class="btn btn-md btn-success float-end me-4 my-3" href="{{route('tag.create')}}">Nova tag</a>
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
            @foreach($tags as $tag)
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->name}}</td>                
                <td>{{$tag->Products->count()}}</td>                
                <td><a href="{{route('tag.edit', $tag->id)}}" class="btn btn-sm btn-warning text-decoration-none">Editar</a></td>
                <td><a href="{{route('tag.destroy', $tag->id)}}" class="btn btn-sm btn-danger text-decoration-none">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
