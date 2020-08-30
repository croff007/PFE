@extends('Doctor/DashboardDoctor')
@section('dashcontent')
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




    <div class="white-box">
        <div class=" cardbox">
            <div class="gg">
                <div class="holder">
                    
                   <img src="../img/{{Auth::user()->photo}}" class="img-circle user-img-circle" alt="User Image" />
           
                   </div>
                   </div>
        </div>
        <div class="cardbox">
            <div class="header">
                <h4 class="font-bold">My Profile</h4>
            </div>
            <div class="body">
                <div class="user-btm-box">
                     <!-- .row -->
                     
                   
                    <!-- /.row -->
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
                            <strong>Name</strong>
                            {{Auth::user()->name}}
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
                            <strong>Last Name</strong>
                            {{Auth::user()->lastname}}
                        </div>
                        
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Email
                                ID</strong>
                       
                            {{Auth::user()->email}}
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                            <strong>Phone</strong>
                          
                            {{Auth::user()->phone}}
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Departement</strong>
                       
                            {{Auth::user()->departement}}
                        </div>

                    </div>

                  
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                            <strong>Description</strong>
                        
                            {{Auth::user()->desc}}
                            </div>
                        
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><strong>Address</strong>
                            {{Auth::user()->adress}}
                            </div>
                        </div>
                </div>
                
            </div>
            </div>




        </div>
    </div>

</form>
@endsection