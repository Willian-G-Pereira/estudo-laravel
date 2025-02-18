@extends('layouts.master')

@section('title', 'Inicio')

@section('content')
<section id="produtos" class="new-products mt-5">
    <div class="container text-center">
        <h1>{{$produto->nome }}</h1>
        <div class="row">
            <div class="livro col-sm-12 col-lg-12 my-4">
                <div class="card">
                    <div class="col-lg-6">
                        <img class="card-img-top" src="{{ $produto['imagem'] }}" alt="Card image cap">
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $produto->nome }}</h5>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><strong>R$ {{ $produto->preco }}</strong></li>
                            </ul>
                            <a href="#" class="d-flex btn btn-primary my-3 justify-content-center comprar">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<section class="mt-5 pt-5 mb-5">
    <div class="container">
        <img src="Images/banner3.jpg" class="img-full" alt="">
    </div>
</section>
@stop