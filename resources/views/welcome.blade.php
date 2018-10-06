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
                src="imagenes\3.jpg" width="811" height="456">
                        
                <article>
                    <h2>    video para la pagina </h2>    
                    <video src= "Videos\Alan Walker - Faded.mp4"  controls="controls" preload="preload" autoplay="autoplay" loop="loop">
                         width=400 hight=300>    
                         <source src="aw.ogg" type="video/ogg"/>   
                         <source src="aw.mp4" type="video/mp4"/>
                         <source src="aw.webm" type="video/webm"/>    
                    </video>         
                </article>


                <article>
                <h2> otro ejemplo de audio</h2>
                <audio src="imagenes\QuieroUnaChica.mp3" controls="controls">
                este navegador no aepta audio html5
                </audio>
                </article>
               
               
                
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
