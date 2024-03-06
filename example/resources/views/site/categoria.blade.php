@extends('site.layout')

@section('title', 'página Home')
@section('conteudo')

  <div class="row container">
<h3>categoria:{{$categoria->nome}} </h3>
    
    @foreach ($produtos as $produto)
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="{{$produto->imagem}} " class="width:50%" >
      
          <a  href="{{ route('site.details',$produto->id)}}"  class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <span class="card-title">{{$produto->nome}}</span>
          <p>{{$produto->descricao}}</p>
        </div>
      </div>
    </div>

        
    @endforeach
  </div>
  <div class="row center">
    {{ $produtos->links('custom.paginate') }}
  </div>
   

    
@endsection
