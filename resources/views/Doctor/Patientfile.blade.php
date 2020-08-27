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
                            <p>{{$patient->name}}</p>
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
                    <header>Past Visit History</header>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table
                            class="table table-striped custom-table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Doctor</th>
                                    <th>Treatment</th>
                                    <th>Chart</th>
                                    <th>Charges($)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>11/05/2017</td>
                                    <td>Dr.Rajesh</td>
                                    <td>Check up</td>
                                    <td>
                                        <div id="sparkline"></div>
                                    </td>
                                    <td>14$</td>
                                    <td><a href="javascript:void(0)" class=""
                                            data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-check"></i></a>
                                        <a href="javascript:void(0)"
                                            class="text-inverse" title="Delete"
                                            data-toggle="tooltip">
                                            <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                
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