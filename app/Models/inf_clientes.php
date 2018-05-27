<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class inf_clientes extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'nome_cliente',
        'id_empresa',
        'email',
        'sexo',
        'cpf',
        'rg',
        'dt_nascimento',
        'cep',
        'endereco',
        'endereco_numero',
        'complemento',
        'bairro',
        'estado',
        'pais',
    ];
}
