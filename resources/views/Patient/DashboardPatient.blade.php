@extends('layouts.app')

@section('content')
{{!$photo='img/'.Auth::user()->photo}}
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo">
            <a href="index.html">
                <span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
                <span class="logo-default">Cabin'NET</span> </a>
        </div>
        <!-- logo end -->
        
        
        <!-- start header menu -->
<div class="top-menu">
    <ul class="nav navbar-nav pull-right">
       
        
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
                        <img src="{{asset($photo)}}" class="img-circle user-img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                    <p> {{auth::user()->name}}</p>
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
                <a href="{{ route('doctorlist') }}" class="nav-link ">
                    <i class="material-icons">assignment</i>
                    
                    <span class="title">Doctor List</span>
                    <span class="selected"></span>
                </a>
                <a href="{{ route('incomingapp') }}" class="nav-link ">
                    <i class="material-icons">assignment</i>
                    
                    <span class="title">Incoming Appointements</span>
                    <span class="selected"></span>
                </a>
            <a href="{{route('patienthistory')}}" class="nav-link ">
                    <i class="material-icons">assignment</i>
                    
                    <span class="title">My History</span>
                    <span class="selected"></span>
                </a> 
            <a href="{{route('patientprofile')}}" class="nav-link ">
                    <i class="material-icons">assignment</i>
                    
                    <span class="title">Edit My Profile</span>
                    <span class="selected"></span>
                </a> 
            </li>
        
        </ul>
    </div>
</div>
</div>
</div>  

<div class="page-content-wrapper">
<div class="page-content">
    @yield('patientcontent')
</div>
</div>
    

      
@endsection