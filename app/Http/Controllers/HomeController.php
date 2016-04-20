<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    /**
     * PagesController constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home() {
        if(auth()->check() && auth()->user()->hasRole('academia')) {
            return view ('academia.index');
        } elseif (auth()->check() && auth()->user()->hasRole('admin')) {
            return view ('admin.index');
        } elseif (auth()->check() && auth()->user()->hasRole('usuario')) {
            return view ('usuario.index');          
        } else {
            return view('home');
        }
    }
}    
