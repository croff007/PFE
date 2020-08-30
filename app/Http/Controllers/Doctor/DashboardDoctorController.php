<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;  
use App\Appointement;

class DashboardDoctorController extends Controller
{ 
  
    public function welcome()
    {
      $users = User::all();
      $appointements = Appointement::all();
      return view('Doctor.DashboardDoctor', compact('users','appointements'));
    }
    public function appointement()
    { $users = User::all();
      $appointements = Appointement::all();
      return view('Doctor.appointement.appointement', compact('users','appointements'));
    } 
    public function showupdate()
    { 
      $appointements = Appointement::all();
      return view('Doctor.doctorprofile',(compact('appointements')));
    } 

    public function update(Request $request)
    { 
      $data = request()->except(['_token','_method']);
        User::where('id', $request->id)->update($data);
        $users = User::all();
        $appointements = Appointement::all();
      return view('Doctor.doctorprofile', compact('users','appointements'));
    } 

    
}
