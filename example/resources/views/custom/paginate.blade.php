@if ($paginator->hasPages())
<ul class="paginatios">
    {{-- Previous page Link  --}}

    @if ($paginator->onFirstPage())
            <li class="disabled"><i class="material-icons"></i> </li>        
   
    @else 
            <li class="waves-effect"><a href="{{$paginator->previousPageUrl()}}"><i class="material-icons">chevron_left </i></a> </li>
            @endif



{{--Pagination elements --}}

                @foreach ($elements as $element)
                    {{-- "Three Dots" separator --}}
               
               @if (is_string($element))
                        <li class="disabled">{{ $element  }} </li>
               @endif

               {{--Array Links --}}
               
               @if (is_array($element))
               @foreach ($element as $page => $url)
               @if ($page == $paginator->currentPage())
                        <li class="active">
                                <a href={{ $page }}></a>    
                        </li>
                   
                @else 
                        <li class="waves-effect"><a class="page-link" href="{{ $url }}"  {{ $page }}></a> </li>
               @endif
                   
               @endforeach
                   
               @endif
               
                    @endforeach



                    {{-- Next page Link --}}


                    @if ($paginator->hasMorePages())

                    <li class="waves-effect"><a href="{{  $paginator-> nextPageUrl()  }}"><i class="material-icons"> chevron_right</i> </a> </li>
                        
                    @else
                        <li class="disabled"><a href="{{  $paginator->nextPageUrl() }}"> <i class="material-icons"> </i></a> </li>
                    @endif

        </ul>
    
@endif