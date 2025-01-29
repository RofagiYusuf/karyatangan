<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $request->session()->regenerate();
            if (Auth::user()->level === 'owner') {
                return redirect()->route('beranda.owner');
            } elseif (Auth::user()->level === 'admin') {
                return redirect()->route('beranda.admin');
            }
        }else {
            return redirect('/login')->with('error', 'Invalid Credentials');
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
