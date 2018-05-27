<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class inf_servicos extends Model
{

    use SoftDeletes;
    
    protected $fillable = [
    'id_empresa',
    'ds_servico',
    'vl_servico'
    ];
    protected $primaryKey = 'id_servico';
    protected $table = 'inf_servicos';
}
