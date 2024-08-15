<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  
    public function register(){
        return view('register');
    }

    public function registerSave(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|min:10',
            'email'    => 'required|email|unique',
            'password' =>  'required|confirmed'
        ]);

        $user = new User;
        $user->create($validate);
    }

    public function login(){
        return view('login');
    }

    public function loginAuth(Request $request){
        $validateFields = $request->validate([
            'email' => 'required|string|email',
            'password'=> 'required|string'
        ]);

        if(Auth::attempt($validateFields)){
            return redirect()->route('index');
        }
        else{
        return redirect('login')->with('loginStatus','invaild email or Password');
        }

        
    }


    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return view('login');
        }
        
    }
}


