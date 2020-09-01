@extends('Patient/DashboardPatient')
@section('patientcontent')

<style>
    .holder {
      display: inline;
    }
    .gg{
        text-align: center;
        margin-bottom: 20px;
    }
    .holder img {
      max-height: 200px;
      max-width: 200px;
      object-fit: cover;
      text-align: center;
     
    }
  </style>

@foreach ($User as $doctors)
    @if($doctors->id ==$id)
        {{!$doctor=$doctors}}
        {{!$photo='../../img/'.$doctor->photo}}

        <div class=" cardbox "style="margin-top:60px">
            <div class="gg">
                <div class="holder">
                   
                   <img src="{{asset($photo)}}" class="img-circle user-img-circle" alt="User Image" />
               
                   </div>
                   </div>
        </div>
    <div class="white-box">
        
        <div class="cardbox">
            <div class="header">
                <h4 class="font-bold">ABOUT DOCTOR</h4>
            </div>
            <div class="body">
                <div class="user-btm-box">
                     <!-- .row -->
                     
                   
                    <!-- /.row -->
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
                            <strong>Name</strong>
                            <p>{{$doctor->name}} {{$doctor->lastname}}</p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                            <strong>Date of birth</strong>
                            <p>{{$doctor->dateofbirth}}</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Email
                                ID</strong>
                            <p>{{$doctor->email}}</p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                            <strong>Phone</strong>
                            <p>{{$doctor->phone}}</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Email
                                ID</strong>
                            <p>{{$doctor->departement}}</p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                            <strong>Adress</strong>
                            <p>{{$doctor->adress}}</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-12"><strong>Address</strong>
                            <p>{{$doctor->desc}}</p>
                        </div>
                    </div>
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-12"><a style="margin-bottom: 5px;margin-left: 20px;margin-right: 20px;" href="{{ URL('/Patient/appontement/'.$doctor->id )}}"
                            class="btn btn-circle deepPink-bgcolor btn-sm">Make appointement</a>
                        </div>
                    </div>
                </div>
            </div>


           




        </div>
    </div>

@endif
@endforeach
@endsection