<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UsuarioController extends Controller {
    /**
     * PagesController constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return view('usuario.index');
    }

    public function getRegistro() {
        return view('usuario.registro');
    }
}
