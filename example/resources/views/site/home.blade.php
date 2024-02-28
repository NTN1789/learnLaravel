@extends('site.layout')
@section('title', 'página Home')
@include('includes.mensagem', ['titulo' => 'Mensagem de sucesso'])  {{--mensagem dinamica --}}



@component('components.sidebar')
    @slot('paragrafo')
    testando component
        
    @endslot

@endcomponent


@section('conteudo')
    <h1 class="text-3xl font-bold ">Essa e nossa home, não esta funcionando ela</h1>

    @if ($nome == 'Natan')
    
true tem esse nome
@else 
false
@endif

@auth
      está autenticado
@endauth

@guest
    não esta autenticado
@endguest


@endsection

@section('rodape')

<h2>teste</h2>
{{isset($nome) ? 'existe': 'não existe'}}{{-- operador ternario --}}


@endsection



{{$teste ?? 'algo qualquer' }}

{{-- comentarip --}}

@push('style')
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
           
          }
        }
      }
    }
  </script>
    
@endpush


