<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class DashboardAdminController extends Controller
{
    
    public function welcome()
    {
      $users=User::where('role','Doctor');
      
      return view('Admin.Dashboard',compact('users'));
    }



    public function confirm(Request $request, User $user)
    {
      $data = request()->except(['_token','_method']);
        User::where('id', $request->id)->update($data);
        $users=User::orderby('created_at','ASC')->paginate(5);
        $link='Admin.all'.$request->role."s";

        return view("$link",compact('users'));
      
    }



    public function doctorslist()
    {
      $users=User::orderby('created_at','ASC')->paginate(5);
      return view('Admin.doctorRequest',compact('users'));
    }
    public function alldoctorslist()
    {
      $users=User::orderby('created_at','ASC')->paginate(5);
      return view('Admin.alldoctors',compact('users'));
    }
    public function blockeddoctorslist()
    {
      $users=User::orderby('created_at','ASC')->paginate(5);
      return view('Admin.blockeddoctors',compact('users'));
    }




    public function allpatientslist()
    {
      $users=User::orderby('created_at','ASC')->paginate(5);
      return view('Admin.allpatients',compact('users'));
    }
    public function blockedpatientslist()
    {
      $users=User::orderby('created_at','ASC')->paginate(5);
      return view('Admin.blockedpatients',compact('users'));
    }
}
