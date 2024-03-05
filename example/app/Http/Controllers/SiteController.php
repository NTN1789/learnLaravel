<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
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
        
        return view('site/details', compact('produto'));
     
      
}


public function categoria($id)
{
    $produtos = Produtos::where('id_categoria',$id)->get();
    
    return view('site/categoria', compact('produtos'));
 
  
}

}