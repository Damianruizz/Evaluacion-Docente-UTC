@extends('layout_admin')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>¡Bienvenido Administrador!</h1>
                <p class="lead">Sistema de Evaluacion docente UTC</p>
                <ul class="list-unstyled">
                    <h3 class="lead">Aqui podras consultar los resultados de las evaluaciones </h3>
                </ul>
            </div>
        </div>

        <br>
        <h2>Promedios por Profesor</h2>
        <h3>Selecciona la carrera para consultar el listado de Profesores.</h3>
        <br>
        <ul class="list-group">
            @foreach($carreras as $key => $value)
                <li class="list-group-item"><a href="{{ route('carrera_prof', $value->id) }}" id="list" class="btn btn-primary"><h3>{{ $value->descripcion }}</h3></a></li>
            @endforeach
        </ul>
        <br><br>    

        <br>
        <h2>Promedios por Carreras</h2>
        <br>
        <ul class="list-group">
            @foreach($carreras as $key => $value)
                <li class="list-group-item"><a href="{{ route('carrera', $value->descripcion) }}"  id="list2" class="btn btn-primary"><h3>{{ $value->descripcion }} </h3></a></li>
            @endforeach
        </ul>

        <br><br><br><br><br><br>



        <div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


        <br><br><br><br>

        <form role="form" method="post" class="login-form" action="{{ url('boolean') }}" style="padding-bottom: 120px;">
            {!! csrf_field() !!}
            
            @if($admin["evaluation"] != null)
                <label class="checkbox-inline"><input type="checkbox" name="admin_option" value="true" checked>Activar/Desactivar la evaluacion de Profesores</label>
            @else
                <label class="checkbox-inline"><input type="checkbox" name="admin_option" value="true">Activar/Desactivar la evaluacion de Profesores</label>
            @endif
            <button type="submit" class="btn">Cambiar</button>
        </form>
    </div>

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
    
    <script src="js/jquery.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
                
        $(function () {

            // Create the chart
            $('#container1').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Promedio General de Carreras UTC'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Promedio'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },

                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{

                        name: 'ING. EN SISTEMAS COMPUTACIONALES',

                        y: <?php echo $sistemas * 10 ?>,
                        drilldown: 'ING. EN SISTEMAS COMPUTACIONALES'
                    }, {
                        name: 'TURISMO',
                        y: <?php echo $turismo * 10 ?>,
                        drilldown: 'TURISMO'
                    }, {
                        name: 'ADMINISTRACION DE EMPRESAS',
                        y: <?php echo $admon * 10 ?>,
                        drilldown: 'ADMINISTRACION DE EMPRESAS'
                    }, {
                        name: 'DISEÑO GRAFICO',
                        y: <?php echo $diseno * 10 ?>,
                        drilldown: 'DISEÑO GRAFICO'
                    }, {
                        name: 'PEDAGOGIA',
                        y: <?php echo $pedagogia * 10 ?>,
                        drilldown: 'PEDAGOGIA'
                    }, {
                        name: 'DERECHO',
                        y: <?php echo $derecho * 10 ?>,
                        drilldown: 'DERECHO'
                    }, {
                        name: 'CONTABILIDAD',
                        y: <?php echo $contabilidad * 10 ?>,
                        drilldown: 'CONTABILIDAD'
                    }]
                }],
                
            });
        });        
    </script>
@endsection    