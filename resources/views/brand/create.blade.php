@extends('layouts.app')

@section('content')

<section class="container py-4 text-center">
    <a class="btn btn-md btn-secondary float-end  my-3" href="{{route('brand.index')}}">Cancelar</a>

    <h4 class="text-uppercase d-flex justify-content-center my-3">Nova marca</h4>
    <div class="fundo bg-dark container-sm py-3 col-7">
        <form class="text-center row justify-content-center d-flex" action="{{route('brand.store')}}" method="POST">
            @csrf
            <div class="input-group mb-3 pt-3"style="width:50% display: block;">
                <span class="input-group-text" id="basic-addon1">Marca</span>
                <input type="text" class="form-control" name="name" required>
            </div>
            <button class="btn btn-me w-50 btn-success mt-3 mb-2" type="submit">Cadastrar</button> 
        </form>
    </div>
</section>
@endsection

        {{-- <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Nome Marca" type="text" name="name" required >
        </div>  
        
            <button class="btn btn-lg w-50 btn-success mt-3 mb-2" type="submit">Cadastrar</button>
        --}}




