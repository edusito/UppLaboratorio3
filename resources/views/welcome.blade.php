<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Edu Tuesta Pascual LAB3
                </div>
                <body Styles="margin: 0px; background: #0e0e0e:">
                <img style="-webkit-user-select: none;cursor: zoom-in;" 
                src="http://gruporivas.com.mx/wp-content/uploads/2018/04/portada-tatuajes-animales.jpg" width="811" height="456">
                              
             </body>
               <body>
               <audio controls="controls">
               <source src="Quiero Una Chica.ogg" type="audio/ogg" />
               <source src="Quiero Una Chica.mp3" type="audio/mpeg" />  <!-- /no funciona la musica -->
             su navegador no soporta el elemento del audio.
               </audio>
               </body> 
                    
               <head>
               <title>HTML5 Audio Tutorial</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="http://code.jQuery.com/jQuery-latest.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript" src="js/html5slider.js"></script>
               </head>
               
               
                
                <div class="links">
                    <a href="https://laravel.com/docs">Documentacion</a>
                    <a href="https://laracasts.com">Quienes Somos</a>
                    <a href="https://laravel-news.com">Mision</a>
                    <a href="https://nova.laravel.com">Vision</a>
                    <a href="https://github.com/laravel/laravel">Nuestro GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
