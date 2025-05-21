<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function manage()
{
    $regions = Region::all();
    $districts = District::all();
    $branches = Branch::all();

    return view('admin.manage', compact('regions', 'districts', 'branches'));
}

}
