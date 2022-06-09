@extends('layouts.app')

@section('content')


<div class="container py-4">
    <h4 class="text-uppercase d-flex justify-content-center"> Tags excluidas</h4>
    <a class="btn btn-md btn-secondary float-end my-3" href="{{route('tag.index')}}">Voltar</a>
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
            @foreach($tags as $tag)
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->name}}</td>                
                <td>{{$tag->Products->count()}}</td>                
                <td><a href="{{route('tag.restore', $tag->id)}}" class="btn btn-sm btn-success text-decoration-none">Restaurar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
