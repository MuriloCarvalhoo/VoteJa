<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votos extends Model
{
    protected $table = "voto";
    public $timestamps = true;

    protected $fillable = [ 'id', 'id_embate', 'nome_candidato', 'token', 'voto' ];
}
