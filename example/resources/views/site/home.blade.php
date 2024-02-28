@extends('site.layout')
@section('title', 'página Home')
@section('conteudo')

  <div class="row container">

    
    @foreach ($produtos as $produto)
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="{{$produto->imagem}} " class="width:50%" >
      
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <span class="card-title">{{$produto->nome}}</span>
          <p>{{$produto->descricao}}</p>
        </div>
      </div>
    </div>

        
    @endforeach
  </div>
  <div class="row">
    {{ $produtos->links() }}
  </div>
   

    
@endsection
