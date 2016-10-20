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

    <!-- Custom CSS -->
    <style>
     
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
                <a class="navbar-brand" href="{{ URL::to('homealumn/' . $alumno['idAlumno']) }}">Inicio</a>
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
            <h1>Evaluando a <?php echo $profesor['Nombre']." ".$profesor['APaterno']?></h1>
            <p class="lead">Sistema de Evaluacion docente UTC</p>
          </div>
        </div>
        <br><br>

        <p class="lead">Contesta con la mayor honestidad posible.</p>

        <br><br>
        <table class="table table-bordered">
        <thead>
          <tr>
          <th>Rubrica</th>
            <th>Nunca</th>
            <th>Casi Nunca</th>
            <th>A veces</th>
            <th>Casi Siempre</th>
            <th>Siempre</th>
          </tr>
        </thead>
        <tbody>
          <form role="form" method="post" id="formulario" action="{{ url('survey') }}">
            {!! csrf_field() !!}
              <tr>
                <td>DOMINIO DE CONTENIDO</td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Las explicaciones de las clases son claras y sin contradicciones</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="uno" value="0" checked>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="uno" value="1" checked>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="uno" value="2" checked>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="uno" value="3" checked>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="uno" value="4" checked>
                  </label>
                </td>
              </tr>

              <tr>
                <td>Los temas impartidos tienen relacion con los previamente vistos</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dos" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dos" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dos" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dos" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dos" value="4">
                  </label>
                </td>
              </tr>
              <tr>
                <td>Los temas vistos en clase tienen relacion con la situacion real</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="tres" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="tres" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="tres" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="tres" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="tres" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Los contenidos son actualizados y cumplen con lo planteado en el temario</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="cuatro" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="cuatro" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="cuatro" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="cuatro" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="cuatro" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>El profesor proporciona diversos enfoques para facilitar la comprension de los contenidos</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="cinco" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="cinco" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="cinco" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="cinco" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="cinco" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>METODOLOGIA</td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
              </tr>

              <tr>
                <td>El profesor proporciona instrucciones claras para la realizacion de asignaciones o proyectos</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="seis" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="seis" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="seis" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="seis" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="seis" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>El profesor monitorea las actividades realizadas en el aula proporcionando retroalimentacion constante</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="siete" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="siete" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="siete" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="siete" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="siete" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Los criterios de evaluacion son congruentes con el objetivo a alcanzar</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="ocho" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="ocho" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="ocho" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="ocho" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="ocho" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Utiliza diversos recursos para facilitar el aprendizaje</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="nueve" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="nueve" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="nueve" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="nueve" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="nueve" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Establece lineamientos justos de evaluacion al momento de asignar una calificacion</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diez" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diez" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diez" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diez" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diez" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>ACTITUD</td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Muestra disposicion para resolver dudas existentes durante la clase</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="once" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="once" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="once" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="once" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="once" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Mantiene un clima de respeto con los estudiantes dentro del aula</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="doce" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="doce" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="doce" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="doce" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="doce" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Fomenta y aplica normas de convivencia</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="trece" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="trece" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="trece" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="trece" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="trece" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Demuestra compromiso hacie el progreso y aprendizaje del estudiante</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="catorce" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="catorce" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="catorce" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="catorce" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="catorce" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Crea el ambiente adecuado para la participacion dentro del aula</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="quince" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="quince" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="quince" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="quince" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="quince" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Realiza cuestionamientos que fomentan la participacion de todos los alumnos</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dieciseis" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dieciseis" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dieciseis" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dieciseis" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dieciseis" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>LIDERAZGO</td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Ante un conflicto dentro del aula el profesor interviene y toma el control</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diecisiete" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diecisiete" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diecisiete" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diecisiete" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diecisiete" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Resuelve conflicots o inconformidades de modo asertivo</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dieciocho" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dieciocho" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dieciocho" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dieciocho" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="dieciocho" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>El profesor promueve que el estudiante aprenda por si mismo</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diecinueve" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diecinueve" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diecinueve" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diecinueve" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="diecinueve" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>El profesor es un modelo de profesionista a seguir</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinte" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinte" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinte" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinte" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinte" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Me ayuda a visualizar mis errores como areas de oportunidad</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiuno" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiuno" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiuno" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiuno" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiuno" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>CONTROL DE GRUPO</td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
              </tr>

              <tr>
                <td>El tono de voz y fluides del profesor al expresarse es adecuado</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintidos" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintidos" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintidos" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintidos" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintidos" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Mantiene un buen control de grupo durante la sesion</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintitres" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintitres" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintitres" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintitres" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintitres" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Establece relaciones fluidas desde una perspectiva tolerante</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinticuatro" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinticuatro" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinticuatro" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinticuatro" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinticuatro" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>MOTIVACION</td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Propone actividades practicas para fortalecer los conocimientos teoricos</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinticinco" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinticinco" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinticinco" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinticinco" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veinticinco" value="4">
                  </label>
                </td>
              </tr>

               <tr>
                <td>Utiliza recursos novedosos que manteinen la atencion de los alumnos durante toda la clase</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiseis" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiseis" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiseis" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiseis" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiseis" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Toma en cuenta mis experiencias para facilitar mi aprendizaje a traves de un lenguaje claro</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintisiete" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintisiete" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintisiete" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintisiete" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintisiete" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>ETICA</td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  </label>
                </td>
              </tr>

              <tr>
                <td>En caso de alguna situacion conflictiva busca solucionarla de manera individual sin fragmentar la clase</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiocho" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiocho" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiocho" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiocho" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintiocho" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Muestra disposicion constante de retroalimentacion</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintinueve" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintinueve" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintinueve" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintinueve" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="veintinueve" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Fomenta la aplicacion dentro del aula a traves de su ejemplo</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treinta" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treinta" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treinta" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treinta" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treinta" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Es considerado ante las necesidades de los demas</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintayuno" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintayuno" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintayuno" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintayuno" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintayuno" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>En la toma de desciciones el profesor toma una postura imparcial</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaydos" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaydos" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaydos" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaydos" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaydos" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Esta comprometido con su propio desarrollo profesional</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaytres" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaytres" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaytres" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaytres" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaytres" value="4">
                  </label>
                </td>
              </tr>

              <tr>
                <td>Incentiva a los alumnos a progresar personal y academicamente</td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaycuatro" value="0">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaycuatro" value="1">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaycuatro" value="2">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaycuatro" value="3">
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                  <input type="radio" name="treintaycuatro" value="4">
                  </label>
                </td>
              </tr>
              
              <td>
                <button type="submit" class="btn btn-primary" id="boton">Terminar</button>
              </td>              

              <td>
                <input type="hidden" name="profesor" value="{{ $profesor['idProfesor'] }}">
                <input type="hidden" name="carrera" value="{{ $carrera }}">
                <input type="hidden" name="idAlumno" value="{{ $alumno['idAlumno'] }}">
              </td>

            </form>
          </tbody>
        </table>

        <style type="text/css">
        .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"], .radio input[type="radio"], .radio-inline input[type="radio"] {
            position: initial;
        }

        #enc{
          padding-top: 50px;
        }
        </style>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function() {
            
            $("#boton").click(function ( event ) {  

              if( $("input[name='uno']:radio").is(':checked') && $("input[name='dos']:radio").is(':checked') && $("input[name='tres']:radio").is(':checked') && $("input[name='cuatro']:radio").is(':checked') && $("input[name='cinco']:radio").is(':checked') && $("input[name='seis']:radio").is(':checked') && $("input[name='siete']:radio").is(':checked') && $("input[name='ocho']:radio").is(':checked') && $("input[name='nueve']:radio").is(':checked') && $("input[name='diez']:radio").is(':checked') && $("input[name='once']:radio").is(':checked') && $("input[name='doce']:radio").is(':checked') && $("input[name='trece']:radio").is(':checked') && $("input[name='catorce']:radio").is(':checked') && $("input[name='quince']:radio").is(':checked') && $("input[name='dieciseis']:radio").is(':checked') && $("input[name='diecisiete']:radio").is(':checked') && $("input[name='dieciocho']:radio").is(':checked') && $("input[name='diecinueve']:radio").is(':checked') && $("input[name='veinte']:radio").is(':checked') && $("input[name='veintiuno']:radio").is(':checked') && $("input[name='veintidos']:radio").is(':checked') && $("input[name='veintitres']:radio").is(':checked') && $("input[name='veinticuatro']:radio").is(':checked') && $("input[name='veinticinco']:radio").is(':checked') && $("input[name='veintiseis']:radio").is(':checked') && $("input[name='veintisiete']:radio").is(':checked') && $("input[name='veintiocho']:radio").is(':checked') && $("input[name='veintinueve']:radio").is(':checked') && $("input[name='treinta']:radio").is(':checked') && $("input[name='treintayuno']:radio").is(':checked') && $("input[name='treintaydos']:radio").is(':checked') && $("input[name='treintaytres']:radio").is(':checked') && $("input[name='treintaycuatro']:radio").is(':checked')) {  
                //alert("¡Gracias por Evaluar, tu opinion es muy importante para nosotros!");
                $("#formulario").submit();  
              } else{  
                event.preventDefault();
                alert("¡Completa todas las respuestas por favor!");  
              }  
            });
           });
        </script>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
