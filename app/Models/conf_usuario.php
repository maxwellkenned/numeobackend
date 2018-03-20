<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class conf_usuario extends Model
{
    protected $fillable = [
      'id_pessoa',
      'id_perfil',
      'usuario',
      'senha',
      'dt_expiracao',
      'status'
    ];
}
