<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;


    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'imagem',
        'slug',
        'id_categoria',
        'id_user',
    ];


    protected $table = 'produtos';
   
    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id'); // pertence a um usuario ou categoria 
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }
 
}
