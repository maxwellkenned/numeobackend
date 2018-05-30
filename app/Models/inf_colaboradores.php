<?php

namespace numeo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class inf_colaboradores extends Model
{
    use SoftDeletes;
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
