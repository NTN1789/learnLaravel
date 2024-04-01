  <!-- Modal Structure -->
  <div id="delete-{{$produto->id}}" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">delete</i> Novo produto</h4>
      
        <div class="row">
    

       <p>tem certeza que deseja deletar {{$produto->nome}}?</p>

        </div> 
       
        <a href="#!" class="modal-close waves-effect waves-green btn blue right">Cancelar</a>
       
        <form action="{{route('admin.produtos.delete', $produto->id)}}" method="POST">
           @method('DELETE');
            @csrf
            <button type="submit"  class=" waves-effect waves-green btn red right">Excluir</button><br>
        </form>
    </div>
      
    
  </div>