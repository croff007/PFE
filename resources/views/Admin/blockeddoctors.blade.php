@extends('Admin/Dashboard')
@section('dashcontent')
<div class="d-flex justify-content-center">

    <div class="col-md-8 col-sm-12 ">
        <div class="card card-box">
            <div class="card-head">
                                    <header>Deleted doctors List</header>
									
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
													<th>Description</th>
													<th>Actions </th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($users as $doctor)
 												@if($doctor->state=='confirmed' && $doctor->role=="Doctor" && $doctor->blocked=="1")
												<tr class="odd gradeX">
													
													<td> {{$doctor->name}} {{$doctor->lastname}}</td>
													
													<td class="center"> {{$doctor->dateofbirth}} </td>
													
													<td class="center"> {{$doctor->adress}} </td>
                                                    <td class="center"> {{$doctor->phone}} </td>
                                                    <td class="center"> {{$doctor->email}} </td>
													<td class="center"> {{$doctor->desc}} </td>
													<td class="center">
													
														
														
                                                            <form method="POST" action="{{route('confirm',$doctor)}}">
                                                                @csrf
                                                                @method('PUT')
																<input hidden name="blocked" value="0">
																<input hidden name="id" value="{{$doctor->id}}">
															<input hidden name="name" value="{{$doctor->name}}">
															<input hidden name="lastname" value="{{$doctor->lastname}}">
															<input hidden name="adress" value="{{$doctor->adress}}">
															<input hidden name="phone" value="{{$doctor->phone}}">
															<input hidden name="photo" value="{{$doctor->photo}}">
															<input hidden name="email" value="{{$doctor->email}}">
															<input hidden name="role" value="{{$doctor->role}}">
															<input hidden name="state" value="{{$doctor->state}}">
															
															<input hidden name="departement" value="{{$doctor->departement}}">
															<input hidden name="desc" value="{{$doctor->desc}}">
																
															<button
																class="btn btn-xs btn-warning dropdown-toggle center no-margin"
                                                                 > Bring Back
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