<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardDoctorController extends Controller
{
    public function welcome()
    {
      return view('Doctor.DashboardDoctor');
    }
}
