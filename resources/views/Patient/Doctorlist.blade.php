@extends('Patient/DashboardPatient')
@section('patientcontent')





<div class="d-flex justify-content-center">
<div class="col-md-8 col-sm-12 ">
    <div class="card card-box" style="margin-top: 50px">
<div class="tab-pane" id="tab2">
    <div class="row">
        @foreach ($users as $patient)
 		 @if ($patient->role == 'Doctor')
        <div class="col-md-4">
            <div class="card card-topline-aqua">
                <div class="card-body no-padding ">
                    <div class="doctor-profile">
                        <img src="img/doc/doc10.jpg" class="doctor-pic" alt="">
                        <div class="profile-usertitle">
                            <div class="doctor-name">Dr.Pooja Patel </div>
                            <div class="name-center"> Cardiology </div>
                        </div>
                        <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                        <div>
                            <p><i class="fa fa-phone"></i><a
                                    href="tel:(123)456-7890"> (123)456-7890</a></p>
                        </div>
                        <div class="profile-userbuttons">
                            <a href="doctor_profile.html"
                                class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                More</a>
                        </div>
                    </div>
                </div>
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