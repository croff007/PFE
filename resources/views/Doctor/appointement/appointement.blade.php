@extends('Doctor/DashboardDoctor')
@section('dashcontent')

<div class="d-flex justify-content-center">

    <div class="col-md-8 col-sm-12 ">
        <div class="card card-box">
            <div class="card-head">
                                    <header>In waiting Appointments List</header>
									
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
													<th>Actions </th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($appointements as $appointement)
												 @if($appointement->state=='notconfirmed' && $appointement->doctorid==Auth::user()->id )
												 
												<tr class="odd gradeX">
													@foreach ($patients as $patient)
														@if($patient->id == $appointement->patientid)
														{{!$phone=$patient->phone}}
														@endif
													@endforeach

													
													<td> {{$appointement->patientname}} </td>
														
													<td class="center"> {{$appointement->dateofbirth}} </td>
													
													<td class="center"> {{$phone}} </td>
													<td class="center"> {{$appointement->adress}} </td>
													<td class="center"> {{$appointement->date}} </td>
													<td class="center"> {{$appointement->desc}} </td>
													<td class="center">
														<a href="{{URL('Doctor/appointement/'.$appointement->id.'/edit')}}">edit</a>
														<div class="btn-group">
															
															<form action="{{ route('appointement.update',$appointement->id) }}" method="POST">
																@csrf
																@method('PUT')
																
																<input type="hidden" name='state' id='state'value="confirmed">
																
															<button
																class="btn blue-bgcolor  center no-margin"
																type="submit" > Confirm
															
															</button>
															</form>
															<form action="{{ route('appointement.destroy',$appointement->id) }}" method="POST">
																@csrf
																@method('DELETE')
																<button
																class="btn deepPink-bgcolor  center no-margin"
																type="submit" > Delete
															
															</button>
															</form>
															
															
															
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