<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
        public function index(){
        return view('acess.login');
    }
    
    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
         
        $credencials = ['email'=>$request->email, 'password'=>$request->password];
       
        if(Auth::attempt($credencials)){
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->with('aviso', 'Acesso Negado Informações Invalidadas');
        }
        
    }
}
