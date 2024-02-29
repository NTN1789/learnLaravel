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


    public function details ($slug)
    {
        $produtos = Produtos::where('slug', $slug);
        return view('site/details', compact('produtos')->first());
    }

}
