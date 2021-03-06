<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AcademiaController extends Controller {    
    /**
     * PagesController constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->middleware('role:academia', ['except' => ['getRegistro']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return view('academia.index');
    }
  
    public function getRegistro() {
        return view('academia.registro');
    }
}
