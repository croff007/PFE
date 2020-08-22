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
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    data-mdl-for="panel-button">
                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                    </li>
                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                    </li>
                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                        here</li>
                </ul>
            </div> 
            <div class="card-body" id="bar-parent">
                <form action="#" id="form_sample_1" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Title
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <select class="form-control input-height" name="select">
                                    <option value="">Select...</option>
                                    <option value="Category 1">Miss</option>
                                    <option value="Category 2">Mr.</option>
                                    <option value="Category 3">Mrs.</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">First Name
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="firstname" data-required="1"
                                    placeholder="enter first name"
                                    class="form-control input-height" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Last Name
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="lastname" data-required="1"
                                    placeholder="enter last name"
                                    class="form-control input-height" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Date Of Appointment
                                <span class="required"> * </span>
                            </label>
                            <div class="input-append date" id="dp1">
                                <input class="formDatePicker" placeholder="Date Of Appointment"
                                    size="44" type="text" readonly>
                                <span class="add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">From</label>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-5">
                                        <input class="form-control input-height" type="time"
                                            value="13:45:00" id="example-time-input">
                                    </div>
                                    <label class="control-label small-label col-md-2">To</label>
                                    <div class="col-md-5">
                                        <input class="form-control input-height" type="time"
                                            value="13:45:00" id="example-time-input2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Address
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <textarea name="address" placeholder="address"
                                    class="form-control-textarea" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Date Of Birth
                                <span class="required"> * </span>
                            </label>
                            <div class="input-append date" id="dp2">
                                <input class="formDatePicker" placeholder="Date Of Birth" size="44"
                                    type="text" readonly>
                                <span class="add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Mobile No.
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input name="number" type="text" placeholder="mobile number"
                                    class="form-control input-height" /> </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Email
                            </label>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control input-height"
                                        name="email" placeholder="Email Address"> </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Consulting Doctor
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <select class="form-control input-height" name="select">
                                    <option value="">Select...</option>
                                    <option value="Category 1">Dr. Rajesh</option>
                                    <option value="Category 2">Dr. Sarah Smith</option>
                                    <option value="Category 3">Dr. John Deo</option>
                                    <option value="Category 3">Dr. Jay Soni</option>
                                    <option value="Category 3">Dr. Jacob Ryan</option>
                                    <option value="Category 3">Dr. Megha Trivedi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Injury/Condition
                            </label>
                            <div class="col-md-5">
                                <input name="creditcard" type="text" placeholder="Injury/Condition"
                                    class="form-control input-height" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Therapy Started Date
                                <span class="required"> * </span>
                            </label>
                            <div class="input-append date" id="dp3">
                                <input class="formDatePicker" placeholder="Therapy Started Date"
                                    size="44" type="text" readonly>
                                <span class="add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Note
                            </label>
                            <div class="col-md-5">
                                <textarea name="address" class="form-control-textarea"
                                    placeholder="note" rows="5"></textarea>
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