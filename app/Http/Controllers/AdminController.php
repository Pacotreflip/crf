<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\CRF\Materia;
use App\CRF\Edificio;

class PagesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home() {
        flash()->success('You have been logged out.');
        return view('.home');

    }
}
