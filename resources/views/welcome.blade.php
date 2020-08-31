<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
                    background-image: linear-gradient(to right top, #1a73e8, #895fd8, #be46b9, #dd2990, #e91e63);
                }
            .nav
            {
                background-color: rgb(235, 235, 235);
                max-height: 60px;
                box-shadow:3px 3px 5px 5px rgba(5, 0, 0, 0.205);
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
            }
        </style>
    </head>
    <body class="grad">
     <div class="nav">
        <div class="flex-center position-ref full-height">
            
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        
                            <a href="{{ route('registerdoctor') }}">Register as doctor </a>
                            <a href="{{ route('registerpatient') }}">Register as patient
                            </a>
                       
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
