@extends('Doctor/DashboardDoctor')
@section('dashcontent')
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

@foreach ($User as $patients)
    @if($patients->id ==$id)
        {{!$patient=$patients}}
        {{!$photo='../../img/'.$patient->photo}}


    <div class="white-box">
        <div class=" cardbox patient-profile">
            <div class="gg">
                <div class="holder">
                   
                   <img src="{{asset($photo)}}" class="img-circle user-img-circle" alt="User Image" />
               
                   </div>
                   </div>
        </div>
        <div class="cardbox">
            <div class="header">
                <h4 class="font-bold">ABOUT PATIENT</h4>
            </div>
            <div class="body">
                <div class="user-btm-box">
                     <!-- .row -->
                     
                   
                    <!-- /.row -->
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
                            <strong>Name</strong>
                            <p>{{$patient->name}} {{$patient->lastname}}</p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                            <strong>Date of birth</strong>
                            <p>{{$patient->dateofbirth}}</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Email
                                ID</strong>
                            <p>{{$patient->email}}</p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                            <strong>Phone</strong>
                            <p>{{$patient->phone}}</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-12"><strong>Address</strong>
                            <p>{{$patient->adress}}</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card card-topline-purple">
                <div class="card-head">
                    <header>Patient History</header>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table
                            class="table table-striped custom-table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Doctor</th>
                                    <th>Note</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Notes as $note)
                                    @foreach ($User as $doctors)
                                    @if($doctors->id ==$note->doctorid)
                                        {{!$doctor=$doctors}}
                                    @endif
                                    @endforeach

                                
                                <tr>
                                    <td>{{$note->created_at}}</td>
                                    <td>{{$doctor->name}} {{$doctor->lastname}}</td>
                                    <td>{{$note->desc}}</td>
                                    
                                </tr>
                               @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




        </div>
    </div>

@endif
@endforeach
@endsection