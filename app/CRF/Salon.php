<?php

namespace App\CRF;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = 'salones';
    protected $primaryKey = 'id_salon';
    public $timestamps = false;
}