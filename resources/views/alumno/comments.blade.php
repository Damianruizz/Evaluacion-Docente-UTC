@extends('layout_alumno')

@section('content')

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('homealumn/' . $alumno['id']) }}">Inicio</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" style="float: right;">
                    <li>
                        <a href="{{ url('logout') }}">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
@endsection    