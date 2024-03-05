@extends('site/layout')
@section('title','Detalhes')
@section('conteudo')

<div class="row container"> <br>
    <div class="col s12 m6">
        <div class="card-image">
           <img src="{{ $produto->imagem }}">
        </div>
    </div>    
    <div class="col s12 m6">
        <h4> {{ $produto->nome }}</h4>
           <p>{{$produto->descricao}}</p>
           <p>postado por: {{$produto->user->firstName}}</p>
           <p>categoria: {{$produto->categoria->nome}}</p>
           <h4> R$ {{ number_format($produto->preco, 2, ',' , '.') }}</h4>
  
   
            <button class="btn orange btn-large">Comprar</button>
       
    </div>
</div>
@endsection