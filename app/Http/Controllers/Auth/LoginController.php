<?php

namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;


    protected function redirectTo()
    {
        if (Auth::user()->role =='Admin')
        {
            return $this->redirectTo= '/Admin/index' ;
        }
        elseif (Auth::user()->role =='Patient')
        {                      
            return $this->redirectTo= '/Patient/index' ;
        }
        elseif (Auth::user()->role =='Doctor')
        {
            return '/Doctor/index' ;
        }
        
         
         
    }
}
