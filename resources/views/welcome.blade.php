<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cabi'NET</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="description" content="Responsive Admin Template" />
        <meta name="author" content="RedstarHospital" />
        <title>Redstar Hospital | Bootstrap Responsive Hospital Admin Template</title>
        <!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
            type="text/css" />
        <!-- Material Design Lite CSS -->
        <link rel="stylesheet" href="{{asset('assets/bundles/material/material.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/material_style.css')}}">
        <!-- icons -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/bundles/iconic/css/material-design-iconic-font.min.css')}}">
        <link href="{{asset('assets/bundles/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- style -->
        <link rel="stylesheet" href="{{asset('css/extra_pages.css')}}">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
        <!-- Theme Styles -->
        <link href="{{asset('css/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
        <link href="{{asset('css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/theme-color.css')}}" rel="stylesheet" type="text/css" />

        <!-- Styles -->
        <style>
            html, body {
               
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                
            }
            .grad{
                     background-image: linear-gradient(to bottom, #786ee9, #7e5fe0, #854ed5, #8c39c9, #921cbb);
                    opacity: 80%;
                }
            .nav
            {
                background-color: rgb(235, 235, 235);
                height: 60px;
                box-shadow:3px 3px 5px 5px rgba(5, 0, 0, 0.205);
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 9999;
            }
            .about{
                margin-top: 10%;
                margin-right:40%;
                background-color: rgb(235, 235, 235);
                border-radius: 25px;
                padding: 10px;
                padding-left:20px; 
                max-width: 50%;
                color: black;
                font-weight: 400;
                box-shadow:3px 3px 5px 5px rgba(5, 0, 0, 0.205);
            }
            .logo{
                    position: fixed;
                    top: 0;
                    float: left;
    display: block;
    width: 235px;
    height: 60px;
    padding: 10px 20px 0px 30px;
                    background: #6673FC;
                    line-height: 1.7 !important;
                }
                .logotext{
                    color: #fff;    
                    margin: 7px 0 0;
                    height: 34px;
                    font-size: 25px;
                }
        </style>
    </head>
    <body class="grad">
     <div class="nav">
        <div class="logo" style="position: fixed;">
            <a href="{{URL('/')}}">
                <span class="logo-icon fa fa-stethoscope fa-rotate-45" style="color: #fff"></span>
                <span class="logotext" style="">Cabin'NET</span> </a>
        </div>
        <div class="flex-center position-ref full-height">
            
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        
                            <a href="{{ route('registerdoctor') }}">Register as doctor </a>
                            <a href="{{ route('registerpatient') }}">Register as patient</a>
                            <a href="{{ route('doctorslistg') }}">Check Our Doctors</a>
                       
                    @endauth
                </div>
     
            @endif
            <div class="about">
                <b>ABOUT US</b>
        
                <p>"Cabi'NET" is an online platform for connecting physicians and patients.
                    As a patient<br> With Cabi'NET you can manage appointments remotely,
                     consult your doctor in the form of a message in a Chat-Room and see notes assigned
                     by your doctors about your health.<br>
                    And as a doctor, you can communicate with other doctors
                    in a Chat-Room to ensure the speed and ease of sharing
                     information, manage your appointments and add notes in the
                     profiles of your patients.
                </p>
        
            </div>
        </div>

    

    </div>

            
    </body>
</html>
