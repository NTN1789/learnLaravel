<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Categoria;
use Illuminate\Support\Facades\Gate;
class SiteController extends Controller
{
    public function index()
    {

           $produtos = Produtos::paginate(4);
          //  return dd($produtos); 

     
         // return view('site/home', compact('nome','idade','html'))
          return view('site/home', compact('produtos'));
        

    }


    public function details($id)
    {
        $produto = Produtos::where('id',$id)->first();
        
       // Gate::authorize('ver-produto', $produto);
     //    $this->authorize('ver-produto', $produto);
       
  //   if(Gate::allows('ver-produto', $produto)){

    // }

  /*  if(auth()->user()->can('verProduto', $produto)){
        return view('site/details', [
            'produto' => $produto
        ]);
    }

    if(auth()->user()->cannot('verProduto', $produto)){
        return redirect()->route('site.index');
    }
*/

    return view('site/details', compact('produto'));
     
   /*  if(Gate::denies('ver-produto', $produto)){
        return redirect()->route('site.home');
     }*/
      
}


public function categoria($id)


{
    $categoria =  Categoria::find($id);

    $produtos = Produtos::where('id_categoria',$id)->paginate(3);
    
    return view('site/categoria', compact('produtos', 'categoria'));
 
  
}

}