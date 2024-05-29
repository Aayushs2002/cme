<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $organizations = Organization::get();
        return view('frontend.auth.register', compact('organizations'));
    }

    public function signuppost(Request $request)
    {
        //  dd($request);
        $req = $request->all();

        $req['password'] = Hash::make($request->password);

        Member::create($req);

        return redirect('/userlogin')->with('success', 'Registration successful. Please log in.');
    }

    public function login()
    {
        return view('frontend.auth.login');
    }

    public function loginpost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('members')->attempt($credentials)) {
            // dd("sucess");
            return redirect()->route('dashboard')->with('success', 'Login Successful');
        }

        return redirect()->route('login')->with('error', 'Credentials do not match');
    }
}
