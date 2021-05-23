<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = "categorias";
    public $timestamps = true;

    protected $fillable = [ 'id_categoria ', 'nome_categoria'];

    public function candidatos(){
        return $this->hasMany(CandidatoModel::class , 'id_categoria');
    }

}
