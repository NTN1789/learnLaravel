@extends('site/layout')
@section('title','Detalhes do Produto')
@section('conteudo')

<div class="row container"> <br>
    <div class="col s12 m6">
        <div class="card-image">
           <img src="{{ $produto->imagem }}">
        </div>
    </div>    
    <div class="col s12 m6">
        <h4> {{ $produto->nome }}</h4>
        <h4> R$ {{ number_format($produto->preco, 2, ',' , '.') }}</h4>
           <p>{{$produto->descricao}}</p>
           <p>postado por: {{$produto->user->firstName}}</p>
           <p>categoria: {{$produto->categoria->nome}}</p>
  
   <form action="{{route('site.addcarinho')}}" method="POST" enctype="multipart/form-data">
    @csrf   
    <input type="hidden" name="id" value="{{ $produto->id}}">
    <input type="hidden" name="name" value="{{ $produto->nome }}">
    <input type="hidden" name="price" value="{{ $produto->preco }}">
    <input type="number" name="quantity" min="1"  value="1">
    <input type="hidden" name="img" value="{{ $produto->imagem }}">
    
    <button class="btn orange btn-large" value="{{}}">Comprar</button>
</form>
       
    </div>
</div>
@endsection