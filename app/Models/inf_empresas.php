<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inf_empresas extends Model
{
  protected $fillable = [
    'id_pessoa',
    'cnpj',
    'nome_fantasia',
    'razao_social',
    'email'
  ];
  protected $primaryKey = 'id_empresa';
  protected $table = 'inf_empresas';
}
