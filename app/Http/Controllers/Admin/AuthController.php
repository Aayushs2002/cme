<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view("admin.auth.login");
    }
    
    public function logout()
    {

            Auth::logout();
            return redirect()->route('admin.login')->with("popsuccess","logout successfully");

    }

    public function store(Request $request)
    {
        // dd($request);   
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
            if (Auth::guard()->attempt($credentials)) {
        
                return redirect()->route('admin.dashboard')->with('popsuccess', 'Login Successful');
            }
  
            return redirect()->route('admin.login')->with('poperror', 'Credentials do not match');
     
    }
}
