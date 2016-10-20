<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evaluacion Docente | UTC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('homeadmin') }}">Inicio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" style="float: right;">
                    <li>
                    </li>
                    
                    <li>
                        <a href="{{ url('logout') }}">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Comentarios del Profesor {{ isset($profesor['Nombre']) ? $profesor['Nombre'] : ' ' }} {{ isset($profesor['APaterno']) ? $profesor['APaterno'] : ' ' }}</h3></h1>
                <ul class="list-unstyled">
                    <h3><strong>Sistema de evaluacion Docente UTC.</strong></h3>
                </ul>
            </div>
        </div>
        <br><br><br>
        <!-- /.row -->

        

        @foreach($comentarios as $key => $value)
            <table class="table">
            <thead>
            </thead>
            <tbody>
              <tr class="active">
                <td><h3 style="padding-left: 20px;">{{ isset($value->comentario) ? $value->comentario : ' ' }}</h3></td>
              </tr>
              <tr class="info">
                <td><p style="float: right; padding-right: 17px;">Fecha: {{ isset($value->created_at) ? $value->created_at : ' ' }}</p></td>
              </tr>
            </tbody>
          </table>
          <br><br>
        @endforeach 
    </div>
    <!-- /.container -->

    <br><br><br><br><br><br>

    <footer class="footer-distributed">

        <div class="footer-right">

            <a target="_blank" href="https://www.facebook.com/Universidad-Tres-Culturas-UTC-157223731018347/"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
            <a target="_blank" href="https://mx.linkedin.com/"><i class="fa fa-linkedin"></i></a>
            <a target="_blank" href="https://github.com/"><i class="fa fa-github"></i></a>
        </div>

        <div class="footer-left">

            <p class="footer-links">
                <a target="_blank" href="http://www.utc.mx">UTC</a>
            </p>

            <p>Universidad Tres Culturas &copy; 2016</p>
        </div>
    </footer>

    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
