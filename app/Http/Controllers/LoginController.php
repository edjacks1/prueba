<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
//Modelos
use App\Modelos\User;


class LoginController extends Controller{
    
    public function index(){
        return view('Login.index');
    }

    public function auth(Request $request){
        $validador = Validator::make($request->all(), [
            'email'            => 'required|email',
            'password'         => 'required',
        ]);

        if( $validador->fails() ){
            return redirect()->route('login.index')->withErrors( $validador->messages()->get('*') );
        }

        $credenciales = $request->only('email', 'password');

        if(Auth::attempt($credenciales)){
            return redirect()->route('empleados.index');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login.index');
    }

    
}
