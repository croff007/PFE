    @extends('layouts/app')
   @section('content')
   
   @if (Auth::check()){
    {{redirect()->route(Auth::user()->type.'/index')}}
   }
   @endif

   </div>
     <div class="limiter">
                <div class="container-login100 page-background">
                    <div class="wrap-login100">
                        @isset($url)
                        <form class="login100-form validate-form " method="POST" action='{{ url("login/$url") }}' >
                        @else
                        <form class="login100-form validate-form " method="POST" action="{{ route('login') }}" >
                        @endisset
            
                            @csrf
                            <span class="login100-form-logo">
                                <img alt="" src="img/hospital.png">
                            </span>
                            <span class="login100-form-title p-b-34 p-t-27">
                                Log in
                            </span>
                            <div class="wrap-input100 validate-input" data-validate="Enter Email">
                                <input class="input100" type="text" name="email" placeholder="Email">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100" type="password" name="password" placeholder="Password" id="password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>
                            <div class="container-login100-form-btn">
                                <button type="submit"class="login100-form-btn">
                                    Login
                                </button>
                            </div>
                            <div class="text-center p-t-30">
                                @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                            </div>
                            <div class="text-center p-t-30">
                                <a class="txt1" href="forgot_password.html">
                                    Create new account
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            