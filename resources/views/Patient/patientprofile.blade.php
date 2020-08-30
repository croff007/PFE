@extends('Patient/DashboardPatient')
@section('patientcontent')

<style>
    .holder {
      display: inline;
    }
    .gg{
        text-align: center;
        margin-bottom: 10px;
        margin-top: 10px;
    }
    .holder img {
      max-height: 200px;
      max-width: 200px;
      object-fit: cover;
      text-align: center;
     
    }
  </style>

<form method="POST" action="">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{Auth::user()->id}}">
    <div class="white-box">
        <div class=" cardbox">
            <div class="gg">
                <div class="holder">
                    <input class="custom-file-input" type="file" name="photo" placeholder="Last Name" id="photo" value="{{Auth::user()->photo}}">
                   <img src="../img/{{Auth::user()->photo}}" class="img-circle user-img-circle" alt="User Image" />
                   <input class="custom-file-input" type="file" name="photo" placeholder="Last Name" id="photo" value="{{Auth::user()->photo}}">
                   </div>
                   </div>
        </div>
        <div class="cardbox">
            <div class="header">
                <h4 class="font-bold">My patient-profile</h4>
            </div>
            <div class="body">
                <div class="user-btm-box">
                     <!-- .row -->
                     
                   
                    <!-- /.row -->
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
                            <strong>Name</strong>
                            <input type="text" name='name' value="{{Auth::user()->name}}">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
                            <strong>Last Name</strong>
                            <input type="text" name='lastname' value="{{Auth::user()->lastname}}">
                        </div>
                        
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Email
                                ID</strong>
                       
                            <input type="text" name='email' value="{{Auth::user()->email}}">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                            <strong>Phone</strong>
                          
                            <input type="text" name='phone' value="{{Auth::user()->phone}}">
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    

                  
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    
                        
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><strong>Address</strong>
                            <textarea name="adress" rows="5" cols="23" >{{Auth::user()->adress}}"</textarea>
                            </div>
                        </div>
                </div>
                <div class="row text-center m-t-10">
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Save
                        </button>
                    </div>
                    </div>
            </div>
            </div>




        </div>
    </div>

</form>
@endsection