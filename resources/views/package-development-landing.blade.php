<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                @if(Auth::check())
                    <a href="{{ url('/logout') }}">Logout</a>
                @else
                
                    <a href="{{ url('/login') }}">Login</a>
                @endif
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="{{URL::to('helpers')}}">helpers</a>
                    <a href="{{URL::to('attitudes')}}">attitudes</a>
                    <a href="{{URL::to('timezones/UTC')}}">timezones</a>

                    <a href="https://github.com/laravel/laravel">GitHub</a>


    <div class="un_flex un_flex_hs">
       <div>
        <h3>helpers</h3>
            <a href="{{URL::to('helpers/timezones/UTC')}}" target="_blank">timezones Helpers</a>


            If the package works, you should be able to see gravatar (when logged) or a login pease message.

            <h2>Gravatar: </h2>

            @if(Auth::check())
            <a href="{{URL::to('unhelpers/gravatar')}}"><img src="{{Auth::user()->gravatar}}"></a>
            @else
                login, pls.
            @endif
       </div>
       <div class="">
        <h3>attitudes</h3>
            <a href="{{URL::to('helpers/timezones/UTC')}}" target="_blank">timezones attitudes</a>
            <a href="{{URL::to('attitudes-docs')}}" target="_blank">Attitudes docs</a>
            <a href="{{URL::to('attitudes-demo')}}" target="_blank">Attitudes docs</a>
           
            If the package works correctly, you should see a message here:

            {{Auth::user()->allattitudescount or 'x'}}

       </div>
       <div class="">
        <h3>timezones</h3>
            <a href="{{URL::to('timezones/UTC')}}" target="_blank">timezones original</a>
           
       </div>
    </div>


                </div>
            </div>
        </div>
    </body>
</html>
