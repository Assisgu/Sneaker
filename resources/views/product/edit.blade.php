@extends('layouts.app')
@section('content')

<section class="container-sm pt-3 text-center">
    <a class="btn btn-md btn-secondary float-end " href="{{route('product.index')}}">Cancelar</a>
    <h4 class="text-uppercase d-flex justify-content-center my-3">Novo produto</h4>

    <div class="fundo bg-dark container-sm py-1 col-7">
        <form class="row justify-content-center" action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="input-group mb-2 pt-1"style="width:50% display: block;">
                <span class="input-group-text" id="basic-addon1">Nome</span>
                <input type="text" class="form-control" name="name"  value="{{$product->name}}" required>
              </div>
              
              <div class="input-group mb-2 pt-1 "style="width:50% display:block;">
                <span class="input-group-text">Descrição</span>
                <textarea class="form-control" name="description" required>{{$product->description}}</textarea>
              </div>

                <div class="input-group mb-2 pt-1">
                    <span class="input-group-text">R$</span>
                    <span class="input-group-text">0.00</span>
                    <input type="text" class="form-control" step="0.1" name="price" value="{{$product->price}}" required>
                </div>

                <div class="input-group mb-2 pt-1">
                    <input type="file" class="form-control" name="image">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
              
                <div class="input-group mb-2 pt-1">
                    <label class="input-group-text">Marcas</label>
                    <select class="form-select" name="brand_id" required>
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}" {{$product->brand_id == $brand->id ? 'selected' : ''}}>{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-2 pt-1">
                    <label class="input-group-text">Tags</label>
                    <select class="form-select" multiple name="tags[]">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}" {{$product->hasTag($tag->id) ? 'selected' : ''}}>{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-2 me-2  pt-1">
                    @for($i = 35; $i < 46; $i++)
                    <div class="col-2 mx-2">
                        <div class="input-group input-group-sm mb-2 ">
                            <span class="input-group-text" id="inputGroup-sizing-sm">{{ $i }}</span>
                            <input type="text" class="form-control" name="{{$i}}" value="{{ $product->Sizes[$i-35]->stock }}">
                        </div>
                    </div>
                    @endfor
                </div>
            <button class="btn btn-me w-50 btn-success  mb-2" type="submit">Alterar</button> 
        </form>
    </section>
    @endsection


{{-- <section class="container mt-2 text-center">
    <div class="text-center justify-content-center d-flex">
        <a class="btn btn-md btn-dark float-end me-2" href="{{route('product.index')}}">Voltar a Lista Tênis</a>
    </div>
    <form class="text-center row justify-content-center d-flex" action="{{route('product.edit', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Nome Produto" type="text" name="name" value="{{$product->name}}" required>
        </div>

        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Descrição" type="text" name="description" value="{{$product->description}}" required>
        </div>

        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Image" type="file" name="image">
        </div>

        <div class="col-7">
            <input class="form-control mt-3 text-center" placeholder="Price" type="number" step="0.1" name="price" value="{{$product->price}}" required>
        </div>

        <div class="col-7">
            Selecione uma marca:
            <select class="form-select" name="brand_id" required>
                @foreach($brands as $brand)
                <option value="{{$brand->id}}" {{$product->brand_id == $brand->id ? 'selected' : ''}}>{{$brand->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-7">
            Selecione tags:
            <select class="form-select" multiple name="tags[]">
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-7 row mt-4">
            @for($i = 35; $i < 46; $i++)
            <div class="col-2">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">{{ $i }}</span>
                    <input type="text" class="form-control" name="{{$i}}" value="{{ $product->Sizes[$i-35]->stock }}">
                </div>
            </div>
            @endfor
        </div>
        <button class="btn btn-lg w-50 btn-success mt-3 mb-2" type="submit">Alterar</button>
    </form>
</section>
@endsection --}}