<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista(){

        $itens = \Cart::getContent();   // vai retornar um array com os itens do carrinho
        return    view('site.carrinho', compact('itens'));                //dd($itens) ; usar sempre para ver as coisas
    }

    public function adicionarCarrinho(Request $request)  {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img
            )
                
            
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'Produto adicionado no carrinho com sucesso!');
    }


        public function removerCarrinho(Request $request){
            \Cart::remove($request->id);
            return redirect()->route('site.carrinho')->with('sucesso', 'Produto removido do carrinho com sucesso!');
        }

        public function atualizarCarrinho(Request $request){
            \Cart::update($request->id, [
                    'quantity' => [
                        'relative' => false, // this is optional, determines if the quantity is relative or not
                        'value' => $request->quantity,
                    ],
            ]);
            return redirect()->route('site.carrinho')->with('sucesso', 'Produto atualizado do carrinho com sucesso!');
        }



        public function limparCarrinho(){
            \Cart::clear();
            return redirect()->route('site.carrinho')->with('aviso', 'Carrinho limpo com sucesso!');
        }
}
