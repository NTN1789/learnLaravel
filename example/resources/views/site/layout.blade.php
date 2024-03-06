<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  
 
    <title>@yield('title')</title>
     <!-- Compiled and minified CSS -->

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 



</head>
<body>

              
 
    <nav class="blue">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo center" >learnLaravel</a>
         <ul id="nav-mobile" class="left">

           <li><a href="{{ route('site.index') }}">Home</a></li>
           <li><a href="" class="dropdown-trigger" data-target='categorias'>Categorias <i class="material-icons right">expand_more</i></a></li>
           
           <li><a href="{{ route('site.carrinho') }}">carrinho  <span class="new badge blue " data-badge-caption="">{{\Cart::getContent()->count()}} </span></a></li>
          </ul>

          <ul id='categorias' class='dropdown-content'>
            @foreach($categoriasMenu as $categoriaM)
              <li> <a href="{{route('site.categoria', $categoriaM->id)}}">{{$categoriaM -> nome}}</a>
             
              </li>
            @endforeach
          </ul>
           
         
        </div>
      </nav>

   @yield('conteudo')

   <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.dropdown-trigger');
      var instances = M.Dropdown.init(elems);
    });
</script>
 

</body>
</html>