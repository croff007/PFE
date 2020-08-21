<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class DashboardDoctorController extends Controller
{ 
  
    public function welcome()
    {
      $users = User::all();
      return view('Doctor.DashboardDoctor', compact('users'));
    }
    public function appointement()
    { $users = User::all();
      return view('Doctor.appointement', compact('users'));
    }
}
