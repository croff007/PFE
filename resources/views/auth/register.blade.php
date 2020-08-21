@extends('layouts.app')

@section('content')

<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            @isset($url)
            <form class="login100-form validate-form" method="POST" action='{{ url("register/$url") }}'>
            @else
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
            @endisset

                <span class="login100-form-logo">
                    <img alt="" src="img/hospital.png">
                </span>
                
                    @csrf
                <span class="login100-form-title p-b-34 p-t-27">
                    Registration
                </span>
                <div class="row">
                    <div class="col-lg-6 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <input class="input100" type="text" name="name" placeholder="Name" id='name' value="{{ old('name') }}"required>
                            @if ($errors->has('name'))
                              <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                <strong>{{ $errors->first('name') }}</strong>
                              </div>
                            @endif
                             </div>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter email">
                            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
                            <input class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @if ($errors->has('email'))
                            <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                              <strong>{{ $errors->first('email') }}</strong>
                            </div>
                         @endif
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter email">
                            <div class="bmd-form-group{{ $errors->has('role') ? ' has-danger' : '' }} mt-3">
                            <input class="input100" type="role" name="role" placeholder="role" value="{{ old('role') }}">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @if ($errors->has('role'))
                            <div id="role-error" class="error text-danger pl-3" for="role" style="display: block;">
                              <strong>{{ $errors->first('role') }}</strong>
                            </div>
                         @endif
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                            <input class="input100" type="password" name="password" placeholder="Password" id="password">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            @if ($errors->has('password'))
                                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                            @endif
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter password again">
                            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
                            <input class="input100" type="password" name="password_confirmation" placeholder="Confirm password"id="password_confirmation">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            @if ($errors->has('password_confirmation'))
                            <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </div>
                          @endif
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Register
                    </button>
                </div>
                <div class="text-center p-t-30">
                    <a class="txt1" href="login.html">
                        You already have a membership?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
