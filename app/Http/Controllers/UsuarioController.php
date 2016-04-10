<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller {
    /**
     * PagesController constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->middleware('role:usuario|invitado', ['except' => ['getLogin', 'postLogin', 'getRegistro']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        if (Auth()->user()->hasRole('usuario')) {
            return view('usuario.index');
        } elseif (Auth()->user()->hasRole('invitado')) {
            return view('invitado.index');
        }
    }
    
    public function getLogin() {
        return view('usuario.login');
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
            if(!Auth()->user()->hasRole(['usuario', 'invitado'])) {
                $this->getLogout();
            }
            return redirect()->intended('usuario/index');
        }
        else {
            dd('la haz cagado');
        }
    }

    public function getRegistro() {
        return view('usuario.registro');
    }
}
