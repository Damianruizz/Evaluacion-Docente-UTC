<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Evaluacion Docente | UTC</title>

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/demo.css">
        <link rel="stylesheet" href="/css/footer-distributed.css">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('homeadmin') }}">Inicio</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" style="float: right;">
                        <li>
                        </li>
                        
                        <li>
                            <a href="{{ url('logout') }}">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="footer-distributed">

            <div class="footer-right">

                <a target="_blank" href="https://www.facebook.com/Universidad-Tres-Culturas-UTC-157223731018347/"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="http://www.utc.mx"><i class="fa fa-linkedin"></i></a>
                <a target="_blank" href="https://github.com/Damianruizz"><i class="fa fa-github"></i></a>

            </div>

            <div class="footer-left">

                <p class="footer-links">
                    <a target="_blank" href="http://www.utc.mx">UTC</a>
                </p>

                <p>Universidad Tres Culturas &copy; 2016</p>
            </div>
        </footer>
    </body>
    
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</html>