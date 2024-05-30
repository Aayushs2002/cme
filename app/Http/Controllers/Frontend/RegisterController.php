<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        $organizations = Organization::get();
        return view('frontend.auth.register', compact('organizations'));
    }
    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/uploads/';
            $imageName = date('YmdHis') . $name . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function imageDelete($filePath)
    {
        $destinationPath = public_path('uploads/');

        if (file_exists($destinationPath . $filePath)) {
            unlink($destinationPath . $filePath);
        }
    }

    public function signuppost(Request $request)
    {
        //  dd($request);
        $image = $this->fileUpload($request, 'photo');

        // dd($image);
        $req = $request->all();
        $req['photo'] = $image;
        $req['password'] = Hash::make($request->password);

        Member::create($req);

        return redirect('/userlogin')->with('popsuccess', 'Registration successful. Please log in.');
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
            return redirect()->route('dashboard')->with('popsuccess', 'Login Successful');
        }

        return redirect()->route('login')->with('poperror', 'Credentials do not match');
    }

    public function logout(){
        // dd("adad");
        Session::flush();
        Auth::guard('members')->logout();
        return redirect()->route('login');
    }
}
