
@if ($errors-> any())

@foreach ($errors->All() as $error)
{{$error}} 
    
@endforeach
    
@endif


<form action="{{route('users.store')}}" method="POST" >
@csrf
Nome: <br><input type="text" name="firstname"> <br>
Sobrenome: <br><input type="text" name="lastname"> <br>
Email: <br><input type="email" name="email"> <br>
Senha: <br><input type="password" name="password"> <br>

<input type="checkbox" name="remember" > Lembrar de mim 

<button type="submit"'> Cadastrar </button>
        </form>