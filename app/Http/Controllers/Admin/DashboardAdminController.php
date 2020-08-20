<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardAdminController extends Controller
{

    public function welcome()
    {
      return view('Admin.Dashboard');
    }
}
