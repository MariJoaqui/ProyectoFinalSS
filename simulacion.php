<?php

$FechaInicio = $_POST['FechaInicio'];
$HoraInicio = $_POST['HoraInicio'];
$FechaFin = $_POST['FechaFin'];
$HoraFin = $_POST['HoraFin'];

$dia1 = date('l', strtotime($FechaInicio));
$dia2 = date('l', strtotime($FechaFin));

echo $dia1;

if ($dia1 == 'Monday'){

}
?>

