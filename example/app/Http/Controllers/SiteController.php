<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
class SiteController extends Controller
{
    public function index()
    {

           $produtos = Produtos::paginate(3);
          //  return dd($produtos); 

     
         // return view('site/home', compact('nome','idade','html'))
          return view('site/home', compact('produtos'));
        

    }

}
