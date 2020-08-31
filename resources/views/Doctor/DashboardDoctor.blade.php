@extends('layouts/app')
@section('content')

@if(Auth::user()->state=='notconfirmed')
  {{ Redirect::to('/enattente') }}
@else

{{!$wait=$appointements->where('state','notconfirmed')}}
{{!$w=$wait->where('doctorid',Auth::user()->id)}}
      {{!$notif=$w->count()}}
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo">
            <a href="index.html">
                <span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
                <span class="logo-default">cabi'NET</span> </a>
        </div>
        <!-- logo end -->
        
       
      
        
        
    </ul>
</div>
</div>
</div>
<div class="page-container">
<div class="sidebar-container">
<div class="sidemenu-container navbar-collapse collapse fixed-menu">
    <div id="remove-scroll" class="left-sidemenu">
        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <li class="sidebar-user-panel">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="http://localhost:8000/img/{{Auth::user()->photo}}" class="img-circle user-img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                    <p> Dr.{{Auth::user()->name}}</p>
                        <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                Online</span></a>
                    </div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <span class="txtOnline">Logout</span>
                    </a>    
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
            <li class="nav-item active open">
                <a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
                    <span class="title">Appointments</span> <span class="selected"></span>
                    
                </a>
                <ul class="sub-menu" style="">
                    <li class="nav-item  ">
                        <a href="{{route('appointement.index')}}" class="nav-link ">
                       <span class="title">New Appointments</span>
                        <span class="label label-rouded label-menu deepPink-bgcolor">{{$notif}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        
                    
                        <a href="{{route('incoming')}}" class="nav-link ">                   
                            <span class="title">Incoming Appointments</span>
                        </a>
                    </li>
                    
                            
                </ul>
            </li> 
            

            <li class="nav-item active open">
                <a href="{{route('mypatients')}}" class="nav-link ">
                        <i class="material-icons">assignment</i>
                        
                        <span class="title">My Patients</span>
                        <span class="selected"></span>
                    </a>
                   
                </li>
            <a href="{{URL('Doctor/update')}}" class="nav-link ">
                    <i class="material-icons">edit</i>
                    
                    <span class="title">Edit My Profile</span>
                    <span class="selected"></span>
                </a>
                     
        </ul>
    </div>
</div>
</div>
</div>  

<div class="page-content-wrapper">
<div class="page-content">
@yield('dashcontent')
</div>
</div>
@endif
@endsection