<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class PatientController extends Controller
{
     
    public function welcome()
    {
      
       
        return view('Patient.DashboardPatient');
    }
    public function doctorlist()
    {
      
        $users = User::all();
        return view('Patient.Doctorlist',compact('users'));
    }
    public function makeappointement()
    {
      
        $users = User::all();
        return view('Patient.makeappointement',compact('users'));
    }

    
}
