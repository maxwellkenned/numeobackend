<?php

namespace numeo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class inf_empresas extends Model
{
    use SoftDeletes;

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
