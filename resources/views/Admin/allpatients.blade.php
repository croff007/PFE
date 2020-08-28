@extends('Admin/Dashboard')
@section('dashcontent')
<div class="d-flex justify-content-center">

    <div class="col-md-8 col-sm-12 ">
        <div class="card card-box">
            <div class="card-head">
                                    <header>All Patients List</header>
									
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
													
													<th>Doctor Name</th>
													<th>Birth date</th>
													<th>Adress</th>
                                                    <th>phone</th>
                                                    <th>E-mail</th>
													
													<th>Actions </th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($users as $patient)
 												@if($patient->role=="Patient" &&( $patient->blocked=="0" ||$patient->blocked=="" ))
												<tr class="odd gradeX">
													
													<td> {{$patient->name}} {{$patient->lastname}}</td>
													
													<td class="center"> {{$patient->dateofbirth}} </td>
													
													<td class="center"> {{$patient->adress}} </td>
                                                    <td class="center"> {{$patient->phone}} </td>
                                                    <td class="center"> {{$patient->email}} </td>
													
													<td class="center">
													
														
														
                                                            <form method="POST" action="{{route('confirm',$patient)}}">
                                                                @csrf
                                                                @method('PUT')
																<input hidden name="blocked" value="1">
																<input hidden name="id" value="{{$patient->id}}">
															<input hidden name="name" value="{{$patient->name}}">
															<input hidden name="lastname" value="{{$patient->lastname}}">
															<input hidden name="adress" value="{{$patient->adress}}">
															<input hidden name="phone" value="{{$patient->phone}}">
															<input hidden name="photo" value="{{$patient->photo}}">
															<input hidden name="email" value="{{$patient->email}}">
															<input hidden name="role" value="{{$patient->role}}">
															<input hidden name="state" value="{{$patient->state}}">
															<input hidden name="desc" value="{{$patient->desc}}">
																
															<button
																class="btn btn-xs btn-warning dropdown-toggle center no-margin"
                                                                 > Delete
															</button>
															
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