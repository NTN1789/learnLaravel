<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Categoria;
use Illuminate\Support\Str;
class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

           $produtos = Produtos::paginate(5);
           $categorias = Categoria::all();
    //                return view('admin.produtos', compact('produtos', 'categorias')); 

     
         // return view('site/home', compact('nome','idade','html'))
       //   return view('site/home', compact('produtos'));
            return response()->json([
                'produtos' => $produtos,
                
            ]);  

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* $produtos = \App\Models\Produtos::all();
         dd($produtos);*/

         return "index";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = $request->all();

        if($request->imagem) {
          $produto['imagem'] = $request->imagem->store('produtos');
        }

        $produto['slug'] = Str::slug($request->nome);

        $produto = Produtos::create($produto);

     //   return redirect()->route('admin.produtos')->with('sucesso', 'Produto cadastrado com sucesso!');

        return response()->json([
            'produto' => $produto,
            'status' => 'success',
            'mensagem' => 'Produto cadastrado com sucesso!'
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produtos::find($id);
        $produto->delete();
        return redirect()->route('admin.produtos')->with('sucesso', 'Produto removido com sucesso!');
    }
}