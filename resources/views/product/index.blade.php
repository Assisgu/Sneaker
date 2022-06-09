@extends('layouts.app')
@section('content')


<div class="container py-4">
    <h4 class="text-uppercase d-flex justify-content-center"> Gerenciador de produtos </h4>
    <a class="btn btn-md btn-secondary float-end  my-3" href="{{route('product.trash')}}">Esgotados</a>
    <a class="btn btn-md btn-success float-end me-4 my-3" href="{{route('product.create')}}">Novo Sneaker</a>

    <table class="table table-dark ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome </th>
                <th> Imagem </th>
                <th>Descrição</th>
                <th>Preço</th>
                {{-- <th>Tag</th> --}}
                <th>Editar</th>
                <th>Esgotado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td><img src="{{asset($product->image)}}" style="width: 8vw; height: 8vh;" alt=""></td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>

                {{-- <td>
                    @foreach($product->Tags()->get() as $tag)
                    {{$tag->name}}
                    @endforeach
                </td> --}}

                <td><a href="{{route('product.edit', $product->id)}}" class="btn btn-sm btn-warning text-decoration-none">Editar</a></td>
                <td><a href="{{route('product.destroy', $product->id)}}" class="btn btn-sm btn-danger text-decoration-none">Esgotado</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection