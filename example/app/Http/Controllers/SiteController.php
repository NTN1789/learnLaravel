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
        //  return view('site/home', compact('produtos'));
            return response()->json([
                'produtos' => $produtos,
            ],200);

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

  //  return view('site/details', compact('produto'));
    
    return response()->json([
        'produto' => $produto,
    ], 200);

   /*  if(Gate::denies('ver-produto', $produto)){
        return redirect()->route('site.home');
     }*/
      
}


public function categoria($id)


{
    $categoria =  Categoria::find($id);

    $produtos = Produtos::where('id_categoria',$id)->paginate(4);
    
   // return view('site/categoria', compact('produtos', 'categoria'));
            return response()->json([
                'produtos' => $produtos,
                'categoria' => $categoria,
              
            ],200);
  
}



        public function createCategoria(Request $request)
        {
            $categoria = $request->all();
         
            $categoria = Categoria::create($categoria); 

            return response()->json([
                'categoria' => $categoria,
                'message' => 'Categoria criada com sucesso!'
            ], 200);
        }



        public function destroy(string $id)
        {
         
            $categoria = Categoria::find($id);
            $categoria->delete();
            

            return response()->json([
                'categoria' => $categoria,
                'message' => 'Categoria excluida com sucesso!'
            ], 200);
        }


}