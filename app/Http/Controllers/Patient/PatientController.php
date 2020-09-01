<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Note;
use App\Appointement;

class PatientController extends Controller
{
     
    public function welcome()
    {
      
        $notes = Note::all();
        return view('Patient.DashboardPatient',compact('notes'));
    }
    public function doctorlist()
    { 
        $notes = Note::all();;
        $users = User::all();
        return view('Patient.Doctorlist',compact('users','notes'));
    }
    public function makeappointement()
    {
        $notes = Note::all();
        $users = User::all();
        return view('Patient.makeappointement',compact('users','notes'));
    }
    public function patienthistory()
    {
      
        $notes = Note::all();
        $users = User::all();
        return view('Patient.Patienthistory',compact('users','notes'));
    }

    public function patientprofile()
    {
      
        $notes = Note::all();
        $users = User::all();
        return view('Patient.patientprofile',compact('users','notes'));
    }

    public function incoming()
    {
        $appointements= Appointement::All();
        $doctors=User::all();
        
        
        return view('Patient.incoming',compact('appointements','doctors'));
    }
    public function showdoctor($id)
    {
               
        $User=User::all();
        return view('Patient.pdoctorprofile',compact('id','User'));
    }
}
