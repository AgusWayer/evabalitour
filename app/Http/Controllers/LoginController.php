<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class LoginController extends Controller
{
   
    public function index(){
        return view('login',[
            'title' => 'Login'
        ]);
    }
    public function login(Request $request){
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required'
        ]);
        if(Auth::attempt($validated)){
            return redirect()->intended('/admin-dashboard');
        }
        return redirect()->back()->withErrors('Username Atau Password Salah');
    }
    //
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
