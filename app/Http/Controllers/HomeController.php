<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * PagesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home() {
        if(Auth()->check()) {
            if(Auth()->user()->hasRole('usuario')) {
                return redirect('usuario/index');
                
            } elseif (Auth()->user()->hasRole(['admin', 'academia'])) {
                return redirect('admin/index');
            }
        } else {
            return view('home');
        }
    }
}
