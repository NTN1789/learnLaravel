@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')

<div class="row container"> 
        <div class="col s12 m6"> 

  <img src=" {{$produtos->imagem}}" class="responsice-img" />
        </div>

        <div class="col s12 m6">

            <h1> {{ $produtos->nome}}</h1>

            <h1> {{ $produtos->descricao}}</h1>

            <button class="btn orange btn-large">comprar</button>
        </div>
</div>



@endsection