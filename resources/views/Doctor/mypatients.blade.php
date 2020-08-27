@extends('Doctor/DashboardDoctor')
@section('dashcontent')
<div class="d-flex justify-content-center">

    <div class="col-md-8 col-sm-12 ">
        <div class="card card-box">
            <div class="card-head">
                                    <header>Booked Appointment List</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row table-padding">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="btn-group">
												<a href="book_appointment_material.html" id="addRow"
													class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="btn-group pull-right">
												<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
													data-toggle="dropdown">Tools
													<i class="fa fa-angle-down"></i>
												</a>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
															<i class="fa fa-print"></i> Print </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i> Export to Excel </a>
													</li>
												</ul>
											</div>
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
													<th>Adress</th>
													<th>Time</th>
													<th>Description</th>
													<th>Actions </th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($appointements as $appointement)
 												@if($appointement->state=='confirmed' && $appointement->doctorid==Auth::user()->id )
												<tr class="odd gradeX">
													
													<td> {{$appointement->patientname}} </td>
													
													<td class="center"> {{$appointement->dateofbirth}} </td>
													
													<td class="center"> {{$appointement->adress}} </td>
													<td class="center"> {{$appointement->date}} </td>
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