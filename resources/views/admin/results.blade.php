@extends('layout_admin')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Sistema de Evaluacion docente UTC</h1>

                <h2 style="color: red">Profesor <?php echo $maestro['Nombre']." ".  $maestro['Apellido_Paterno']?> </h2>
                <ul class="list-unstyled">
                </ul>
            </div>
        </div>
        <!-- /.row -->
        <br>
        <div class="col-lg-12 text-center">
            <h3>Total de Evaluaciones: <?php echo $num_evaluaciones ?></h3>
        </div>
        <br><br><br><br><br><br>



        <div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


        <br><br><br>
        <h2 style="text-align: center;">Promedio general por Rubricas</h2>
        

        <br><br><br>

        <table class="table table-striped">
            <thead>
              <tr>
                <th>Rubrica</th>
                <th>Promedio</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>DOMINIO DE CONTENIDO</td>
                <td><?php echo $prom_modulo1 ?></td>
              </tr>
              <tr>
                <td>METODOLOGIA</td>
                <td><?php echo $prom_modulo2 ?></td>
              </tr>
              <tr>
                <td>ACTITUD</td>
                <td><?php echo $prom_modulo3 ?></td>
              </tr>
              <tr>
                <td>LIDERAZGO</td>
                <td><?php echo $prom_modulo4 ?></td>
              </tr>
              <tr>
                <td>CONTROL DE GRUPO</td>
                <td><?php echo $prom_modulo5 ?></td>
              </tr>
              <tr>
                <td>MOTIVACION</td>
                <td><?php echo $prom_modulo6 ?></td>
              </tr>
              <tr>
                <td>ETICA</td>
                <td><?php echo $prom_modulo7 ?></td>
              </tr>
            </tbody>
        </table>

        <br><br><br>

        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

        <br><br>
        <h3>Promedio de General de Evaluacion:   <?php echo $promedio ?></h3>
        <br><br>
        <a href="{{ route('conscom', $maestro['id']) }}" id="destroy" class="btn btn-primary">Consultar Comentarios</a>
    </div>
    <br><br>

    <script src="js/jquery.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>


    <script type="text/javascript">
        $( document ).ready(function() {
            $(function () {

            $('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Promedio General por Rubrica'
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

                        name: 'DOMINIO DE CONTENIDO',

                        y: <?php echo $prom_modulo1 * 10 ?>,
                        drilldown: 'DOMINIO DE CONTENIDO'
                    }, {
                        name: 'METODOLOGIA',
                        y: <?php echo $prom_modulo2 * 10 ?>,
                        drilldown: 'METODOLOGIA'
                    }, {
                        name: 'ACTITUD',
                        y: <?php echo $prom_modulo3 * 10 ?>,
                        drilldown: 'ACTITUD'
                    }, {
                        name: 'LIDERAZGO',
                        y: <?php echo $prom_modulo4 * 10 ?>,
                        drilldown: 'LIDERAZGO'
                    }, {
                        name: 'CONTROL DE GRUPO',
                        y: <?php echo $prom_modulo5 * 10 ?>,
                        drilldown: 'CONTROL DE GRUPO'
                    }, {
                        name: 'MOTIVACION',
                        y: <?php echo $prom_modulo6 * 10 ?>,
                        drilldown: 'MOTIVACION'
                    }, {
                        name: 'ETICA',
                        y: <?php echo $prom_modulo7 * 10 ?>,
                        drilldown: 'ETICA'
                    }]
                }],
                
            });
        });




            $(function () {

            // Create the chart
            $('#container1').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Promedio General por Carrera'
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


        });


    </script>

@endsection    