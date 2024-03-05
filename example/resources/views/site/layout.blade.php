<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  
 
    <title>@yield('title')</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <script>
      document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('.dropdown-trigger');
     var instances = M.Dropdown.init(elems, options);
   });
   $('.dropdown-trigger').dropdown();
    </script>
</head>
<body>
  <ul id='dropdown1' class='dropdown-content'>
    @foreach ($categoriasMenu as $categoriaM)
    <ul id='dropdown1' class='dropdown-content'>
              
      <li><a href="#!">{{$categoriaM->nome}}  </a> </li>
    </ul>
    @endforeach
              
    <li><a href="#!"><i class="material-iconst">view_module</i>four   </a></li>
  </ul>
    <nav class="blue">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo left" >learnLaravel</a>
          <ul id="nav-mobile" class="right">
            <li><a href="">Home</a></li>
            <a class='dropdown-trigger btn' data-target='dropdown'>categorias</a>
          
            <li><a href="">carrinho</a></li>
           
          </ul>
        </div>
      </nav>

   @yield('conteudo')


 

</body>
</html>