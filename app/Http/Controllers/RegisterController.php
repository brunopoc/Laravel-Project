<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

class RegisterController extends Controller
{
    protected $redirectTo = '/dashboard';
    
    protected function create(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|min:3'
        ]);
        
        if(!empty($request)){
                
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'type' => 'normal',
            ]);

            $log = $this->login($request);
            if($log == 1){
               return redirect()->intended('dashboard');
            } else {
                return redirect()->back()->with('aviso', 'Acesso Negado Informações Invalidadas');
            }
        } else {
                return redirect()->back()->with('aviso', 'Campos Vazios');
        }
    }
    
    public function index(){
                return view('acess.register');
    }
    
    public function login(Request $dados){
        
        $credencials = ['email'=>$dados->email, 'password'=>$dados->password];
        if(Auth::attempt($credencials)){
            return 1;
        } else {
            return 0;
        }
    }
    
}
