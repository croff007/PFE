@extends('Patient/DashboardPatient')
@section('patientcontent')

<div class="card card-topline-purple">
    <div class="card-head">
        <header>My History</header>
    </div>
    <div class="card-body ">
        <div class="table-responsive">
            <table
                class="table table-striped custom-table table-hover">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Doctor</th>
                        <th>Note</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $note)
                     @if($note->patientid == Auth::user()->id)
                        @foreach ($users as $doctors)
                        @if($doctors->id ==$note->doctorid)
                            {{!$doctor=$doctors}}
                        @endif
                        @endforeach

                    
                    <tr>
                        <td>{{$note->created_at}}</td>
                        <td><b>{{$doctor->departement}}:</b> {{$doctor->name}} {{$doctor->lastname}}</td>
                        <td>{{$note->desc}}</td>
                        
                    </tr>
                    @endif
                   @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection