<?php

$FechaInicio = $_POST['FechaInicio'];
$HoraInicio = $_POST['HoraInicio'];
$FechaFin = $_POST['FechaFin'];
$HoraFin = $_POST['HoraFin'];

$dia1 = date('l', strtotime($FechaInicio));
$dia2 = date('l', strtotime($FechaFin));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://cdn.plot.ly/plotly-2.6.3.min.js"></script>

</head>
<body class="grey darken-1">

    <nav class="nav-wrapper black">
        <div class="container">
            <a href="index.php" class="brand-logo">Proyecto Final</a>

            <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="menu-responsive">
        <li><a href="index.php">Inicio</a></li>
    </ul>
    
    <div class="container">
        <form class="col s12" action="index.php" method="post">
            <div class="row">
                <div class="col s12">
                    <h4>Organización del sentido vehicular de la nueva vía:</h4>

                    <b>Los días se muestran en inglés:</b><br>
                </div>

                <div class="col 2">
                    (Monday = Lunes
                </div>

                <div class="col 2">
                    Tuesday = Martes
                </div>

                <div class="col 2">
                    Wednesday = Miércoles
                </div>

                <div class="col 2">
                    Thursday = Jueves
                </div>

                <div class="col 2">
                    Friday = Viernes
                </div>

                <div class="col 2">
                    Saturday = Sábado
                </div>

                <div class="col 2">
                    Sunday = Domingo)
                </div>
            
                <div class="col s12">
                    
                    <?php

                    for ($i = $FechaInicio; $i <= $FechaFin; $i = date("Y-m-d", strtotime($i . "+1 days"))){
                        echo "<h5>" . $dias = date('l', strtotime($i)) . " - " .
                            $Dia = date('d', strtotime($i)) . "/" . 
                            $Mes = date('m', strtotime($i)) . "/" .
                            $Año = date('Y', strtotime($i)) . "</h5><br>";

                            if(date('l', strtotime($i)) === 'Monday'){
                                echo 'holi';
                            }
                            else if (date('l', strtotime($i)) === 'Tuesday'){
                                echo 'holi de nuevo';
                            }
                            else if (date('l', strtotime($i)) === 'Wednesday'){

                            }
                            else if (date('l', strtotime($i)) === 'Thursday'){
                                
                            }
                            else if (date('l', strtotime($i)) === 'Friday'){
                                
                            }
                            else if (date('l', strtotime($i)) === 'Saturday'){
                                
                            }
                            else {
                                echo 'si';
                            }
                            
                    }

                    ?>
                
                </div>

                <div class="col s12">
                    <button class="btn waves-effect waves-light black white-text" type="submit" name="action">Inicio</button>
                </div>
            </div>
        </form>
    </div>
        
    <!--SCRIPT-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });

    </script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems,{
                duration: 500,
                indicators: true,
                fullWidth: true
            });
        });

    </script>
</body>
</html>