@extends('Patient/DashboardPatient')
@section('patientcontent')


<div class="d-flex justify-content-center">

    <div class="col-md-8 col-sm-12 ">
        <div class="card card-box">
            <div class="card-head">
                                    <header>Incoming Appointments List</header>
									
								</div>
								<div class="card-body no-padding height-9">
									<div class="row table-padding">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="btn-group">
												
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											
										</div>
									</div>
									<div class="table-responsive">
										<table
											class="table table-striped table-bordered table-hover table-checkable order-column"
											id="example4">
											<thead>
												<tr>
													
													<th>Patient Name</th>
													<th>Birth date</th>
													<th>Phone</th>
													<th>Adress</th>
													<th>Time</th>
													<th>Description</th>
													
												</tr>
											</thead>
											<tbody>
                                                @foreach ($appointements as $appointement)
                                                 @if( $appointement->patientid==Auth::user()->id &&
                                                       $appointement->state =='confirmed' && $appointement->date > date('Y-m-d', strtotime('-1 day')) )
                                                            
                                                            @foreach ($doctors as $doctor)
                                                            @if($doctor->id == $appointement->doctorid)
                                                            {{!$phone=$doctor->phone}}
                                                            {{!$name=$doctor->name}}
                                                            {{!$lastname=$doctor->lastname}}
                                                            @endif
                                                            @endforeach
												<tr class="odd gradeX">
													
													<td class="center"style="min-width:150px"> {{$name}} {{$lastname}}</td>
													
													<td class="center"> {{$appointement->dateofbirth}} </td>
													
													<td class="center"> {{$phone}} </td>
													<td class="center"> {{$appointement->adress}} </td>
													<td class="center"> {{$appointement->date}} </td>
													<td class="center" style="max-width:200px"> {{$appointement->desc}} </td>
													
                                                    
															
															
														</div>
													</td>
                                                </tr>
                                               
											
														</div>
													</td>
                                                </tr>
                                                @endif
                                                @endforeach
											</tbody>
										</table>
									</div>
								</div>
                            </div>
</div>
@endsection