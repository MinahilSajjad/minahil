<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manage()
    {
        $branches = Branch::with(['district', 'region'])->get(); // eager-load relationships

        return view('admin.manage', compact('branches'));
    }
}
