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

<div class="d-flex justify-content-center">
<div class="col-md-8 col-sm-12 ">
    <div class="card card-box" style="margin-top: 50px">
<div class="tab-pane" id="tab2">
    <div class="row">
        @foreach ($users as $doctor)
 		 @if ($doctor->role == 'Doctor')
        <div class="col-md-4">
            <div class="card card-topline-aqua" style="overflow-y: auto; height:400px;">
                <div class="card-body no-padding ">
                    <div class="doctor-profile">
                        
                        <img src="{{asset('img/'.$doctor->photo)}}" class="doctor-pic" alt="">
                        <div class="profile-usertitle">
                            <div class="doctor-name">Dr.{{$doctor->name}} {{$doctor->lastname}} </div>
                            <div class="name-center"> {{$doctor->departement}} </div>
                        </div>
                        <p>{{$doctor->adress}} </p> 
                        <div>
                            <p><i class="fa fa-phone"></i><a
                                    href="tel:{{$doctor->name}}"> {{$doctor->phone}}</a></p>
                        </div>

                        
                            
                        
                    </div>
                    
                </div>
                <a style="margin-bottom: 5px" href="{{ URL('/Patient/appontement/'.$doctor->id )}}"
                    class="btn btn-circle deepPink-bgcolor btn-sm">Make appointement</a>
                    <a style="margin-bottom: 5px" href="{{ URL('/Patient/appontement/'.$doctor->id )}}"
                        class="btn btn-circle blue-bgcolor btn-sm">See profile</a>    
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
</div>
</div>
</div>
@endsection