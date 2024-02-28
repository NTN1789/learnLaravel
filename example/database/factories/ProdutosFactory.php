<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Support\Str;
/**
 * 
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdutosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nome = $this->faker->unique()->sentence();

        return [
            'nome' => $nome,
            'descricao' => $this->faker->text(),
            'preco' => $this->faker->randomFloat(2),
            'slug' => Str::slug($nome . ' '), // Concatenação para evitar espaços em branco
            'imagem' => $this->faker->imageUrl(400, 400),
    
            // Gerenciamento de erros para User
            'id_user' => User::pluck('id')->random() ?? null,
    
            // Gerenciamento de erros para Categoria
            'id_categoria' => Categoria::pluck('id')->random() ?? null,
    
            'updated_at' => now(),
            'created_at' => now(),
        ];
      
    }
}
