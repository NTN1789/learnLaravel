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
<h3> seu carinho tem:{{$itens->count()}}  produtos.</h3>
    
   
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
                    <td><input type="number" style="width: 40" name="quantity" value="{{$item->quantity}}" /> </td>
                    <td><button class="btn-floating  waves-effect waves-light orange"><i class="material-icons">refresh</i></button></td>
                    <td><button class="btn-floating  waves-effect waves-light red"><i class="material-icons">delete</i></button></td>
                </tr>
    @endforeach      
        </tbody>
      </table>
  </div>

  <div class="row container center"> 
    <button class="btn waves-effect waves-light blue ">Continuar comprando <i class="material-icons right">arrow_back</i></button>
    <button class="btn  waves-effect waves-light blue ">Limpar carrinho <i class="material-icons right">clear</i></button>
    <button class="btn  waves-effect waves-light blue ">finalizar pedido <i class="material-icons right">check</i></button>

  </div>

        

  </div>


  @endsection