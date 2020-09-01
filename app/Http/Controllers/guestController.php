<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class guestController extends Controller
{
    public function doctorlist(){
        $users=User::all();
        return view('gestdoctorslist',compact('users'));
    }
}
