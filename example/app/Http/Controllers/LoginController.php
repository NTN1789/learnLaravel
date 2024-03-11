<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth( Request $request){
            $credenciais =  $request->validate([
                'email' => ['required' , 'email'],
                'password' => ['required'],

            ],[

                    'email.required' => 'O campo email é obrigatório',
                    'email.email' => 'o email não é válido',   
                    'password.required' => 'O campo senha é obrigatorio',
            ]
        
        
        );

            if (Auth::attempt($credenciais, $request->remember)) {        // o attempt verificar se tem o usuario no banco de dados
                       $request->session()->regenerate(); 

                       return redirect()->intended(route('admin.dashboard'));    // o intended ,  redireciona para algum lugar
          
                        

                    } else {
                        return redirect()-> back()->with(
                            'erro', 'Email ou senha invalidos',
                        );
                    }
    }


    public function logout(Request $request){
        Auth:: logout() ;


        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect(route('site.index'));

    }


    public   function create(){
            return view('login.create');
    }
}
