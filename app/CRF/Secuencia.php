<?php

namespace App\CRF;

use Illuminate\Database\Eloquent\Model;

class Secuencia extends Model
{
    protected $table = 'secuencias';
    protected $primaryKey = 'id_secuencia';
    public $timestamps = false;
}