<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller {    
    /**
     * PagesController constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->middleware('role:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
            return view('admin.index');
    }
      
    public function getRegistro() {
        return view('academia.registro');
    }
}
