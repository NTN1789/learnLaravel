@extends('site/layout')
@section('title', 'Carrinho')
@section('conteudo')

  <div class="row container">
    @if ($mensagem = Session::get('sucesso'))

    <div class="card green">
        <div class="card-content white-text">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"> Parabéns!</span>
              <p>     {{$mensagem}} </p>
            </div>
 
          </div>
        </div>
      </div>
        
      @endif

      @if ($mensagem = Session::get('aviso'))

      <div class="card blue">
          <div class="card-content white-text">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">  </span>
                <p>     {{$mensagem}} </p>
              </div>
   
            </div>
          </div>
        </div>
    @endif

     @if ($itens->count()  == 0  )
        
     <div class="card orange">
      <div class="card-content white-text">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title"> seu carrinho está vazio </span>
            <p>  aproveite nossas promoções </p>
          </div>

        </div>
      </div>
    </div>
     @else 
     <h3> seu carinho tem:{{$itens->count()}}  produto.</h3>
    
   
    <table class="striped">
        <thead>
          <tr>
              <th></th>
              <th>Nome</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
            @foreach ($itens as $item)
            <tr> 
                    <td><img src="{{$item->attributes->image}}" alt="" width="70"  class="responsive-img circle"> </td>
                    <td>{{$item->name}}</td>
                    <td> R$ {{ number_format($item->price, 2, ',' , '.') }}</td>
                    <form action="{{route('site.atualizarCarrinho')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <td><input type="number" style="width: 40" name="quantity"  min="1" value="{{$item->quantity}}" /> </td>
                    <td><button class="btn-floating  waves-effect waves-light orange"><i class="material-icons">refresh</i></button></td>
                    </form>
                   
                      
                      <form action="{{route('site.removercarinho')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <td><button class="btn-floating  waves-effect waves-light red"><i class="material-icons">delete</i></button></td>
                      </form>
                </tr>
    @endforeach      
        </tbody>
      </table>
         
      <h5>valor total:  R$ {{ number_format(\Cart::getTotal(), 2, ',' , '.') }}</h5>
     @endif

 

  <div class="row container center"> 
    <a href="{{route('site.index')}}" class="btn waves-effect waves-light blue ">Continuar comprando <i class="material-icons right">arrow_back</i></a>
    <a href="{{route('site.limparCarrinho')}}" class="btn  waves-effect waves-light blue ">Limpar carrinho <i class="material-icons right">clear</i></a>
    <button class="btn  waves-effect waves-light blue ">finalizar pedido <i class="material-icons right">check</i></button>

  </div>

        

  </div>


  @endsection