@extends('layouts.app')

@section('content')
<section class="container mt-2 text-center">

    <form class="text-center row justify-content-center d-flex" action="{{route('product.store')}}" method="POST">
        @csrf
        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Nome Produto" type="text" name="name" >
        </div>  

        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Descrição" type="text" name="description" >
        </div>
        
        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Price" type="number" step="0.1" name="price" >
        </div>
        <button class="btn btn-lg w-50 btn-success mt-3 mb-2" type="submit">Cadastrar</button>
    </form>
</section>
@endsection