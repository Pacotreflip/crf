<?php

namespace App\CRF;

use Illuminate\Database\Eloquent\Model;

class Academia extends Model
{
    protected $table = 'academias';
    protected $primaryKey = 'id_academia';
    public $timestamps = false;
}
