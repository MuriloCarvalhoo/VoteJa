<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = "embates";
    public $timestamps = true;

    protected $fillable = [ 'id', 'id_categoria', 'nome_embate', 'candidato_1', 'candidato_2', 'voto_1', 'voto_2' ];
}
