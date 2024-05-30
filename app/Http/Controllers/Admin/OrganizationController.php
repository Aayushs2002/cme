<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrganizationRequest;
use App\Models\Organization;
use Illuminate\Http\Request;
use League\CommonMark\Node\Query\OrExpr;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('admin.organization.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.organization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrganizationRequest $request)
    {
        $req = $request->all();
        Organization::create($req);
        return redirect()->route('admin.organization.index')->with('popsuccess', 'organization Added');

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
    public function edit(Organization $organization)
    { 

        return view('admin.organization.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $organization)
    {
        $req = $request->all();
        $organization->update($req);
        return redirect()->route('admin.organization.index')->with('popsuccess', 'Organization Edited');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('admin.organization.index')->with('popsuccess', 'Organization Deleted');
    }
}
