<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CmeProgram;
use App\Models\CmeRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardsController extends Controller
{
    public function index()
    {
        $user_id = Auth::guard('members')->user()->organization_id;
        // dd($user_id);
        $ongoings = CmeProgram::where('user_id', $user_id)->where('status', 1)->get();
        
        $upcommings = CmeProgram::where('user_id', $user_id)->where('status', 0)->get();
        // dd($ongoings);
        return view('frontend.member.dashboard', compact('ongoings', 'upcommings'));
    }

    public function singlepage($id)
    {
        $program = CmeProgram::find($id);
        // dd($program);
        $member = Auth::guard('members')->user();

        return view('frontend.singlepage.programsinglepage', compact('program','member'));
    }

    public function cmeregister(Request $request){
        
        $req = $request->all();
        $req['member_id'] = Auth::guard('members')->user()->id;
        CmeRegistration::create($req);
        return redirect()->back()->with('sucess','registration sucess');
    }
}
