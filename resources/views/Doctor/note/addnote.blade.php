@extends('Doctor/DashboardDoctor')
@section('dashcontent')


<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Add note</header>
                
                
            </div> 
            <div class="card-body" id="bar-parent">
                <form class="form-horizontal" method="POST" action="{{ route('Note.store') }}">
                    @csrf
                    <div class="form-body">
                        <input type="hidden" id="patientid" name="patientid" value="{{$id}}">
                        <input type="hidden" id="doctorid" name="doctorid" value="{{Auth::user()->id}}">
         
                        <div class="form-group row">
                            <label class="control-label col-md-3">Description
                                <span class="required"> * </span>
                            </label>
                            <div class="input-append date" id="dp1">
                                <textarea id="desc" name="desc"class="formDatePicker" placeholder="Write your notes here.."
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