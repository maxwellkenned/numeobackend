<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inf_pessoas extends Model
{
    protected $fillable = [
      'nome_pessoa',
      'email',
      'sexo',
      'cpf',
      'rg',
      'rg_emissor',
      'dt_nascimento',
      'titulo',
      'titulo_zona',
      'titulo_secao',
      'nome_pai',
      'nome_mae',
      'cep',
      'endereco',
      'endereco_numero',
      'id_cidade',
      'id_cidade_nascimento',
    ];
}
