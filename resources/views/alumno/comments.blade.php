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
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/bootstrap.css" rel="stylesheet">

  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/bootstrap.css" rel="stylesheet">
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
                <a class="navbar-brand" href="{{ URL::to('homealumn/' . $alumno['id']) }}">Inicio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" style="float: right;">
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

        <div class="row" id="enc">
          <div class="col-lg-12 text-center">
            <h1>Evaluando a <?php echo $profesor['Nombre']." ".$profesor['Apellido_Paterno']." ".$profesor['Apellido_Materno']?></h1>
            <p class="lead">Sistema de Evaluacion docente UTC</p>
            <br><br>
          </div>
        </div>

        <p class="lead">Muchas gracias por tu evaluacion. Tu opinion es muy importante para nosotros.</p>
        <p class="lead">Tu opinion nos permite mejorar el rendimiento de los maestros en la Universidad.</p>
        <p class="lead">Para concluir con la evaluacion de el profesor <?php echo $profesor['Nombre']." ".$profesor['Apellido_Paterno']." ".$profesor['Apellido_Materno']?> dejanos un comentario breve de su desempeño en el aula. Este comentario es anonimo y confidencial.</p>

        <br><br>

       <form role="form" method="post" action="{{ url('comment') }}">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="comment">Comentario:</label>
            <textarea name="comentario" class="form-control" rows="6" id="comment"></textarea>
          </div>

          <input type="hidden" name="profesor" value="{{ $profesor['id'] }}">
          <input type="hidden" name="carrera" value="{{ $carrera }}">
          <input type="hidden" name="alumno" value="{{ $alumno['id'] }}">
          <button type="submit" id="boton" class="btn btn-primary">Enviar</button>
        </form>        

        <br><br><br>
      <!-- /.row -->
    </div>

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


    <style type="text/css">
      #enc{
        padding-top: 50px;
      }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function() {
            
            $("#boton").click(function ( event ) {  
              alert("Gracias por tus comentarios, ¡tu opinion es muy importante para nosotros!");  
            });
          });
        </script>
  </body>
</html>