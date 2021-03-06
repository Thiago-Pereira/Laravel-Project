<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogadores extends Model
{
    protected $table = 'jogadores';
    protected $primaryKey = 'id_jogadores';

    protected $fillable = ["nome_jogadores", "habilidade", "goleiro"];
}
