<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Region;
use App\Models\District;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of branches.
     */
    public function index()
    {
        $branches = Branch::with(['region', 'district'])->get();
        return view('branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new branch.
     */
    public function create()
    {
        $regions = Region::all();
        $districts = District::all();
        return view('branches.create', compact('regions', 'districts'));
    }

    /**
     * Store a newly created branch in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'code'        => 'required|string|max:50|unique:branches,code',
            'address'     => 'required|string|max:500',
            'region_id'   => 'required|exists:regions,id',
            'district_id' => 'required|exists:districts,id',
        ]);

        Branch::create($request->only([
            'name', 'code', 'address', 'region_id', 'district_id'
        ]));

        return redirect()->route('branches.index')
                         ->with('success', 'Branch created successfully.');
    }

    /**
     * Display the specified branch.
     */
    public function show(Branch $branch)
    {
        $branch->load(['region', 'district']);
        return view('branches.show', compact('branch'));
    }

    /**
     * Show the form for editing the specified branch.
     */
    public function edit(Branch $branch)
    {
        $regions   = Region::all();
        $districts = District::all();
        return view('branches.edit', compact('branch', 'regions', 'districts'));
    }

    /**
     * Update the specified branch in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'code'        => 'required|string|max:50|unique:branches,code,' . $branch->id,
            'address'     => 'required|string|max:500',
            'region_id'   => 'required|exists:regions,id',
            'district_id' => 'required|exists:districts,id',
        ]);

        $branch->update($request->only([
            'name', 'code', 'address', 'region_id', 'district_id'
        ]));

        return redirect()->route('branches.index')
                         ->with('success', 'Branch updated successfully.');
    }

    /**
     * Remove the specified branch from storage.
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('branches.index')
                         ->with('success', 'Branch deleted successfully.');
    }
}
