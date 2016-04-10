<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {    
    /**
     * PagesController constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->middleware('role:admin|academia', ['except' => ['getLogin', 'postLogin', 'getRegistro']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        if (Auth()->user()->hasRole('admin')) {
            return view('admin.index');
        } elseif (Auth()->user()->hasRole('academia')) {
            return view('academia.index');
        }
    }
    
    public function getLogin() {
        return view('admin.login');
    }
    
    public function  getLogout() {
        dd('Salise');
        Auth::logout();
        return redirect('/');
    }
    
    public function postLogin(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if(!Auth()->user()->hasRole(['admin', 'academia'])) {
                $this->getLogout();
            } 
            return redirect()->intended('admin/index');
        }
        else {
            dd('la haz cagado');
        }
    }
        
    public function getRegistro() {
        return view('academia.registro');
    }
}
