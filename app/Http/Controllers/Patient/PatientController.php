<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class PatientController extends Controller
{
     
    public function welcome()
    {
      
       
        return view('Patient.DashboardPatient');
    }
}
