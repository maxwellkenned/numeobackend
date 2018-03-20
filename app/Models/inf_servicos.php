<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inf_servicos extends Model
{
  protected $fillable = [
    'id_empresa',
    'ds_servico',
    'vl_servico'
  ];
  protected $primaryKey = 'id_servico';
  protected $table = 'inf_servicos';
}
