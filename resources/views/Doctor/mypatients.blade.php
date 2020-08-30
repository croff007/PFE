@extends('Doctor/DashboardDoctor')
@section('dashcontent')
<div class="d-flex justify-content-center">

    <div class="col-md-8 col-sm-12 ">
        <div class="card card-box">
            <div class="card-head">
                                    <header>my patients List</header>
									
								</div>
								<div class="card-body no-padding height-9">
									<div class="row table-padding">
										
									</div>
									<div class="table-responsive">
										<table
											class="table table-striped table-bordered table-hover table-checkable order-column"
											id="example4">
											<thead>
												<tr>
													
													<th>Patient Name</th>
													<th>Birth date</th>
													<th>Adress</th>
													
													<th>Description</th>
													<th>Actions </th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($appointements->unique('patientid') as $appointement)
 												@if($appointement->state=='confirmed' && $appointement->doctorid==Auth::user()->id )
												<tr class="odd gradeX">
													
													<td> {{$appointement->patientname}} {{$appointement->patientlastname}} </td>
													
													<td class="center"> {{$appointement->dateofbirth}} </td>
													
													<td class="center"> {{$appointement->adress}} </td>
													
													<td class="center"> {{$appointement->desc}} </td>
													<td class="center">
														<div class="btn-group">
															<a href="{{ URL('/Doctor/makenote/'.$appointement->patientid )}}" >
																
															<button
																class="btn btn-xs btn-warning dropdown-toggle center no-margin"
																 > Add note
															
															</button>
														</a>
														
														<a href="{{ URL('/Doctor/showpatient',$appointement->patientid )}}" >
																
															<button
																class="btn btn-xs btn-warning dropdown-toggle center no-margin"
																 > Show profile
															
															</button>
                                                        </a>
															
															
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