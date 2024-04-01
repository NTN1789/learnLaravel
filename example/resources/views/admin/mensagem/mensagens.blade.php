@if ($mensagem  = Session::get('sucesso') )
   

<div class="card blue">
    <div class="card-content white-text">
      <div class="card green ">
        <div class="card-content white-text">
          <span class="card-title">  </span>
          <p>     {{$mensagem}} </p>
        </div>

      </div>
    </div>
  </div>

@endif