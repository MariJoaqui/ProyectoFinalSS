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
        <form class="col s12" action="simulacion.php" method="post">
            <div class="row">
                <div class="col s12">
                    <h4>Organización del sentido vehicular de la nueva vía.</h4>

                    <h5><b>Fecha y hora de inicio:</b></h5>
                </div>
            
                <div class="input-field col s6">
                    <input id="input_text" type="text" data-length="10" name="FechaInicio" required>
                    <label class="black-text" for="input_text">Fecha: </label>
                    <?php
                        echo 'Formato: dd/mm/aa';
                    ?>
                </div>
                
                <div class="input-field col s6">
                    <input id="input_text" type="text" data-length="10" name="HoraInicio" required>
                    <label class="black-text" for="input_text">Hora: </label>
                    <?php
                        echo 'Formato: hh/mm';
                    ?>
                </div>

                <div class="col s12">
                    <h5><b>Fecha y hora de culminación:</b></h5>
                </div>
            
                <div class="input-field col s6">
                    <input id="input_text" type="text" data-length="10" name="FechaFin" required>
                    <label class="black-text" for="input_text">Fecha: </label>
                    <?php
                        echo 'Formato: dd/mm/aa';
                    ?>
                </div>
                
                <div class="input-field col s6">
                    <input id="input_text" type="text" data-length="10" name="HoraFin" required>
                    <label class="black-text" for="input_text">Hora: </label>
                    <?php
                        echo 'Formato: hh/mm';
                    ?>
                </div>

                <div class="col s12">
                    <button class="btn waves-effect waves-light black white-text" type="submit" name="action">resultado</button>
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