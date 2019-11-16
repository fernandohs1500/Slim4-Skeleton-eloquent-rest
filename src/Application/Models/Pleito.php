<?php

namespace App\Application\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pleito extends Eloquent
{
    protected $table = 'pleito';
    protected $fillable = ['cod_funcionario','cod_comprador','dat_ini_pleito', 'dat_fim_pleito'];
    protected $primaryKey = 'id';
}