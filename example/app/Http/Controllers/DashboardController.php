<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Produtos;
use DB;

class DashboardController extends Controller
{
		



        public function index(){
		// retornar a quantidade de usuarios no sistema 

		$usuarios = User::all()->count();


		// gráfico 1 - usuários   

		$usersData = User::select([
			DB::raw('YEAR(created_at) as ano'),
			DB::raw('COUNT(*) as total')
		])
		->groupBy('ano')
		->orderBy('ano', 'asc')
		->get();




		// arrays de users

		foreach($usersData as $user){
			 $ano[] = $user->ano;
			 $total[] = $user->total;
		}
	

		// formatar para chartjs



		$userLabel = "'comparativo de cadastros de usuários'";
		$userAno = implode(',', $ano); 
		$userTotal = implode(',',$total);

	//	dd($usersData);
	



	// grafico 2  -categorias 


	$catData = Categoria::with('produtos')->get();


	// preparar o array 

		foreach($catData as $cat){
				$catNome[] = "'".$cat->nome."'";
				$catTotal[] = $cat->produtos->count();

		}


		// formatar para chartjs 

		
		$catLabel = implode(',', $catNome);
		$catTotal = implode(',', $catTotal);

			return view('admin.dashboard' , compact('usuarios', 'userLabel','userAno','userTotal', 'catLabel', 'catTotal'));
	}
}
