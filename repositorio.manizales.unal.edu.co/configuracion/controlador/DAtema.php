<?php

require_once('../modelo/configuracion.php');

    $ModeloConfiguracion = new Configuracion();
    $IdTem = $_GET['transporte'];
    $IdInd = $_GET['transaction'];
    $Ruta = "?transaction=" . $IdTem;
    $ModeloConfiguracion->deleteIndicadorATema($IdTem, $IdInd, $Ruta);

?>