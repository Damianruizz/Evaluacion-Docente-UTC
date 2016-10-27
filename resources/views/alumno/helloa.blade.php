@extends('layout_alumno')

@section('content')

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('homealumn/' . $alumno_sesion) }}">Inicio</a>
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

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>¡Bienvenido(a) <?php echo $alumno['Nombre']." ".  $alumno['Apellido_Paterno']." ".  $alumno['Apellido_Materno']?>!</h1>
                <p class="lead">Sistema de Evaluacion docente UTC</p>
                <ul class="list-unstyled">
                    <li>Cuatrimestre: <?php echo $grupo['Cutrimestre_id'] ?></li>
                    <li>Carrera: <?php echo $carrera['descripcion'] ?></li>
                    <li>Turno: <?php echo $turno['turno'] ?></li>
                    <li>Grupo: <?php echo $grupo['Cutrimestre_id'] ?><?php echo $carrera['carrera'] ?><?php echo $grupo['Turno_id'] ?><?php echo $grupo['Grupo'] ?></li>
                </ul>
            </div>
        </div>
        <br>

         <div class="row">
            <div class="col-lg-12 text-center">
                <h3>La evaluacion esta disponible para los siguientes profesores</h3>
            </div>
        </div>

        <br><br>
        <ul class="list-group">
            @foreach($profesores_data as $key => $value)
                @if($profesores_data[$key])
                    <li class="list-group-item"><a href="{{ URL::to('evaluation/'.$value->id.'/'.$carrera['descripcion']) }}" id="list" class="btn btn-primary"><h3>{{ $value->Nombre }} <?php echo "" . " " . "" ?> {{ isset($value->Apellido_Paterno) ? $value->Apellido_Paterno : 'Default' }} <?php echo "" . " " . "" ?> {{ isset($value->Apellido_Materno) ? $value->Apellido_Materno : 'Default' }}</h3></a></li>
                @endif            
            @endforeach
        </ul>
    </div>
@endsection    