@if ($mensagem = Session::get('erro'))
        {{$mensagem}}
@endif


@if ($errors-> any())

@foreach ($errors->All() as $error)
{{$error}} 
    
@endforeach
    
@endif


<form action="{{route('login.auth')}}" method="POST" >
@csrf
            <input  placeholder="Digite seu email"  name="email">
                
            <input type="password"   placeholder="Digite sua senha"  name="password">

            <button type="submit" >Entrar</button>
        </form>