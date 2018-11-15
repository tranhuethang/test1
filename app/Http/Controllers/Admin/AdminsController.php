<?php

namespace App\Http\Controllers\Admin;

use Auth;

class AdminsController extends Controller
{
    public function getInfo()
    {
        $admin = Auth::guard('admins')->user();

        return view('admin.information.index', compact('admin'));
    }
}
