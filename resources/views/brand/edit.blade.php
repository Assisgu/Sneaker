@extends('layouts.app')

@section('content')
<section class="container mt-2 text-center">
    <div class="text-center justify-content-center d-flex">
        <a class="btn btn-md btn-dark float-end me-2" href="{{route('brand.index')}}">Voltar a Lista Marcas</a>
    </div>
    <form class="text-center row justify-content-center d-flex" action="{{route('brand.edit', $brand->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Nome Marca" type="text" name="name" value="{{$brand->name}}" required>
        </div>

        <button class="btn btn-lg w-50 btn-success mt-3 mb-2" type="submit">Alterar</button>
    </form>
</section>
@endsection