<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmeRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUser extends Controller
{
    public function index(){
        // $cme = CmeRegistration::all();

        // $aa = Auth::user();
     
        // if (check() == false) {
        //     foreach ($aa->organization as $cc) {
        //         $req['organization_id'] = $cc->id;
        //     }
        // }

        $user = Auth::user();
        if ($user->isSuperUser()) {

            $cme = CmeRegistration::all();

        } else {
            $organizations = $user->organization->pluck('id');
            
            $cme = CmeRegistration::where('organization_id', $organizations)->get();
            // dd($cme);
        }


        return view('admin.registereduser.index',compact('cme'));
    }


    public function view($id){
// dd($id);
        $cmes = CmeRegistration::where("id",$id)->first();
        
        return view('admin.registereduser.view',compact('cmes'));
    }

    public function verify($id)
    {
        $cmeregistration = CmeRegistration::find($id);
        if ($cmeregistration) {
            $cmeregistration->status = 'verified'; 
            $cmeregistration->save();
            return redirect()->back()->with('popsuccess', 'CME Registration verified successfully.');
        }
        return redirect()->back()->with('poperror', 'CME Registration not found.');
    }

    public function reject($id)
    {
        $cmeregistration = CmeRegistration::find($id);
        if ($cmeregistration) {
            $cmeregistration->status = 'rejected'; 
            $cmeregistration->save();
            return redirect()->back()->with('popsuccess', 'CME Registration rejected successfully.');
        }
        return redirect()->back()->with('poperror', 'CME Registration not found.');
    }
}
