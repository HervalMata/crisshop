<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.admin_dashboard');
    }
}
