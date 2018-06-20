<?php

namespace Numeo\Models;

use Illuminate\Database\Eloquent\Model;

class conf_usuarios extends Model
{
    protected $fillable = [
      'id_pessoa',
      'id_perfil',
      'usuario',
      'senha',
      'dt_expiracao',
      'status'
    ];
    protected $table = "conf_usuarios";
}
