<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmeProgram;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->isSuperUser()) {

            $programs = CmeProgram::all();
        } else {
            $organizations = $user->organization->pluck('id');
            // $newes = News::whereIn('category_id', $categoryIds)->get();
            $programs = CmeProgram::where('organization_id', $organizations)->get();
            // dd($programs);
        }
        return view('admin.cme.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizations = Organization::get();

        return view('admin.cme.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $req = $request->all();


        $aa = Auth::user();

        if (check() == false) {
            foreach ($aa->organization as $cc) {
                $req['organization_id'] = $cc->id;
            }
        }
        // dd($cc->id);
        // dd($aa->organization->id);
        CmeProgram::create($req);
        return redirect()->route('admin.cme.index')->with('popsuccess', 'CME Program created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $program= CmeProgram::find($id);
        
        // dd($program);
        $organizations = Organization::get();

        return view('admin.cme.edit', compact('program', 'organizations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $aa = Auth::user();
        $program = CmeProgram::where('id', $id)->first();
        $req = $request->all();
        if (check() == false) {
            foreach ($aa->organization as $cc) {
                $req['organization_id'] = $cc->id;
            }
        }
        $program->update($req);
        return redirect()->route('admin.cme.index')->with('popsuccess', 'News Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $program = CmeProgram::where('id', $id)->first();
        $program->delete();
        return redirect()->route('admin.cme.index')->with('popsuccess', 'cme deleted');
    }
}
