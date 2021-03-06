@extends('layouts.app')

@section('content')

@foreach ($errors->all() as $error)
{{ $error }}
@endforeach
@if (Auth::check()){
  {{redirect()->route(Auth::user()->type.'/index')}}
 }
 @endif

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
                        <div class="wrap-input100 validate-input" data-validate="Enter Last name">
                            <div class="bmd-form-group{{ $errors->has('lastname') ? ' has-danger' : '' }}">
                            <input class="input100" type="text" name="lastname" placeholder="Last Name" id='lastname' value="{{ old('lastname') }}"required>
                            @if ($errors->has('lastname'))
                              <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                <strong>{{ $errors->first('lastname') }}</strong>
                              </div>
                            @endif
                             </div>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                    </div>


                    <div class="col-lg-6 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter Date of birth">
                            <div class="bmd-form-group{{ $errors->has('dateofbirth') ? ' has-danger' : '' }}">
                            <input class="input100" type="date" name="dateofbirth" placeholder="Date of birth" id='dateofbirth' value="{{ old('dateofbirth') }}"required>
                            @if ($errors->has('dateofbirth'))
                              <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                <strong>{{ $errors->first('dateofbirth') }}</strong>
                              </div>
                            @endif
                             </div>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                    </div>

                    

                    <div class="col-lg-6 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter phone">
                            <div class="bmd-form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                            <input class="input100" type="tel" name="phone" placeholder="Phone" id='phone' value="{{ old('phone') }}"required>
                            @if ($errors->has('phone'))
                              <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                <strong>{{ $errors->first('phone') }}</strong>
                              </div>
                            @endif
                             </div>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                    </div>

                    

                    <div class="col-lg-6 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter Adress">
                            <div class="bmd-form-group{{ $errors->has('adress') ? ' has-danger' : '' }}">
                            <textarea class="input100" type="text" name="adress" placeholder="Adress" id='adress' value="{{ old('adress') }}"required></textarea>
                            @if ($errors->has('adress'))
                              <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                <strong>{{ $errors->first('adress') }}</strong>
                              </div>
                            @endif
                             </div>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                    </div>



                    
                    <div class="col-lg-6 p-t-20">
                        <div class="wrap-input100 validate-input" data-validate="Enter your photo">
                           
                            <div class="bmd-form-group{{ $errors->has('photo') ? ' has-danger' : '' }}">
                                <label class="custom-file-label" for="validatedCustomFile">Choose Photo...</label>  
                            <input class="custom-file-input" type="file" name="photo" placeholder="Last Name" id='photo' value="{{ old('photo') }}">
                            @if ($errors->has('photo'))
                              <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                <strong>{{ $errors->first('photo') }}</strong>
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
                    <input type="hidden" id="blocked" name="blocked" value="0">
                    
                    @if($r=='Patient')
                    <input type="hidden" id="state" name="state" value="confirmed">
                    <input type="hidden" id="role" name="role" value="Patient">    
                    @endif     
                @if ($r=='Doctor')
                <input type="hidden" id="state" name="state" value="notconfirmed">
                <input type="hidden" id="role" name="role"value="Doctor">

                <div class="col-lg-6 p-t-20">
                    <div class="wrap-input100 validate-input" data-validate="Enter Your departement">
                        <div class="bmd-form-group{{ $errors->has('departement') ? ' has-danger' : '' }}">
                        <input class="input100" type="text" name="departement" placeholder="Departement" id='departement' value="{{ old('departement') }}"required>
                        @if ($errors->has('departement'))
                          <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                            <strong>{{ $errors->first('departement') }}</strong>
                          </div>
                        @endif
                         </div>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                </div>
                    
                
                <div class="col-lg-6 p-t-20">
                    <div class="wrap-input100 validate-input" data-validate="Enter Description">
                        <div class="bmd-form-group{{ $errors->has('Description') ? ' has-danger' : '' }}">
                        <textarea class="input100" type="text" name="desc" placeholder="Description" id='desc' value="{{ old('desc') }}"required></textarea>
                        @if ($errors->has('desc'))
                          <div id="name-error" class="error text-danger pl-3" for="desc" style="display: block;">
                            <strong>{{ $errors->first('desc') }}</strong>
                          </div>
                        @endif
                         </div>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                </div>

                @endif
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
