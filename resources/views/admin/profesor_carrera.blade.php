@extends('layout_admin')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Sistema de Evaluacion docente UTC</h1>
                <p class="lead"></p>
                <ul class="list-unstyled">
                    <h3>Selecciona el profesor para consultar sus resultados.</h3>
                </ul>
            </div>
        </div>
        <!-- /.row -->
        <br>
        <h2>Profesores que imparten clases en {{ isset($carrera['descripcion']) ? $carrera['descripcion'] : ' ' }}</h2>
        <br>
        <ul class="list-group">
            @foreach($maestros as $key => $value)
                @if($maestros[$key])
                    <li class="list-group-item"><a href="{{ route('results', $value->id) }}" id="list2" class="btn btn-primary"><h3>{{ $value->Nombre }} {{ isset($value->Apellido_Paterno) ? $value->Apellido_Paterno : ' ' }} {{ isset($value->Apellido_Materno) ? $value->Apellido_Materno : ' ' }}</h3></a></li>
                @endif
            @endforeach 
        </ul>   
        <br><br>
    </div>
    <br><br><br><br><br><br>

    <style type="text/css">
       #list{
            background-color: rgba(205, 22, 22, 0.91);
            width: 60%;
            margin-left: 20%;
        }

        #list2{
            background-color: rgba(0, 132, 255, 0.72);
            width: 60%;
            margin-left: 20%;
        }
    </style>


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
@endsection    