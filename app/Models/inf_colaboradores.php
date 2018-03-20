<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inf_colaboradores extends Model
{
    protected $fillable = [
      'id_pessoa',
      'id_empresa',
      'id_funcao',
      'id_conjuge',
      'dt_admissao',
      'salario',
      'clt',
      'clt_serie',
      'clt_pis',
      'inf_escolaridade',
      'frequencia_pagamento'
    ];
}
