<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct() {
        view()->share('periodo', $this->periodo());
    }
    
    function periodo() {
        if(getdate()['mon'] < 7) {
            return getdate()['year'] . ' - ' . 2;
        } else {
            return getdate()['year'] + 1 . ' - ' . 1;
        }
    }
}

