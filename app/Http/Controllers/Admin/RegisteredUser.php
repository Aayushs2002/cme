<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmeRegistration;
use Illuminate\Http\Request;

class RegisteredUser extends Controller
{
    public function index(){
        $cme = CmeRegistration::all();
        return view('admin.registereduser.index',compact('cme'));
    }
}
