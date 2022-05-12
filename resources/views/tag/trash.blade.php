@extends('layouts.app')

@section('content')

<a class="btn btn-md btn-dark float-end me-2" href="{{route('tag.index')}}">Voltar a Lista Tags</a>

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
                <td><a href="{{route('tag.restore', $tag->id)}}" class="btn btn-sm btn-success text-decoration-none">Restaurar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
