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
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

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
                <h1>¡Bienvenido Administrador!</h1>
                <p class="lead">Sistema de Evaluacion docente UTC</p>
                <ul class="list-unstyled">
                    <h3 class="lead">Aqui podras consultar los resultados de las evaluaciones </h3>
                </ul>
            </div>
        </div>
        <!-- /.row -->
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

       <!--  @foreach($maestros as $key => $value)
            <a href="{{ route('results', $value->idProfesor) }}" id="destroy"><h3>{{ $value->Nombre }} <?php ?> {{ isset($value->APaterno) ? $value->APaterno : ' ' }} <?php  ?> {{ isset($value->AMaterno) ? $value->AMaterno : ' ' }}</h3></a>
        @endforeach -->

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
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>

    <!-- Bootstrap Core JavaScript -->
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
</body>

</html>
