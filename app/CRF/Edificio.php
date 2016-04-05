<?php

namespace App\CRF;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model {
    protected $table = 'edificios';
    protected $primaryKey = 'id_edificio';
    public $timestamps = false;
    
    function Salones() {
        return $this->hasMany('App\CRF\Salon', 'id_edificio');  
    }
}