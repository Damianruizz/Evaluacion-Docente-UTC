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
                <h1>Sistema de Evaluacion docente UTC</h1>

                <h2 style="color: red">Carrera: <?php echo $carrera ?> </h2>
                <ul class="list-unstyled">
                </ul>
            </div>
        </div>
        <!-- /.row -->
        <br>
        <div class="col-lg-12 text-center">
            <h3>Total de Evaluaciones:              <?php echo $num_evaluaciones ?></h3>
        </div>
        <br><br><br><br><br><br>



        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


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

        <br><br>
        <h3>Promedio de General de Evaluacion:   <?php echo $promedio ?></h3>
    </div>
    <br><br>

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

    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>

    <!-- <script src="js/grafica.js"></script> -->

    <script type="text/javascript">
        $( document ).ready(function() {
            $(function () {

            // Create the chart
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

        });


    </script>

</body>

</html>
