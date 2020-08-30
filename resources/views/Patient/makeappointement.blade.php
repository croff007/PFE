@extends('Patient/DashboardPatient')
@section('patientcontent')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Book Appointment</header>
                <button id="panel-button"
                    class="mdl-button mdl-js-button mdl-button--icon pull-right"
                    data-upgraded=",MaterialButton">
                    <i class="material-icons">more_vert</i>
                </button>
                
            </div> 
            <div class="card-body" id="bar-parent">
                <form class="form-horizontal" method="POST" action="{{ route('Patient.appointement.store') }}">
                    @csrf
                    <div class="form-body">
                        <input type="hidden" id="doctorid" name="doctorid" value="{{$id}}">
                        <input type="hidden" id="patientid" name="patientid" value="{{Auth::user()->id}}">
                        <input type="hidden" id="name" name="patientname" value="{{Auth::user()->name}}">
                        <input type="hidden" id="patientlastname" name="patientlastname" value="{{Auth::user()->lastname}}">
                        <input type="hidden" id="adress" name="adress" value="{{Auth::user()->adress}}">
                        <input type="hidden" id="dateofbirth" name="dateofbirth" value="{{Auth::user()->dateofbirth}}">
                        <input type="hidden" id="state" name="state" value="notconfirmed">

                        
           
         
                        
                      
                        <div class="form-group row">
                            <label class="control-label col-md-3">Date Of Appointment
                                <span class="required"> * </span>
                            </label>
                            <div class="input-append date" id="dp1">
                                <input id="date" name="date"class="formDatePicker" placeholder="Date Of Appointment"
                                    size="44" type="datetime-local" >
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3">Description
                                <span class="required"> * </span>
                            </label>
                            <div class="input-append date" id="dp1">
                                <textarea id="desc" name="desc"class="formDatePicker" placeholder="Description"
                                    size="44" type="datetime-local" ></textarea>
                                
                            </div>
                        </div>
                        
                       
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                <button type="button" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection