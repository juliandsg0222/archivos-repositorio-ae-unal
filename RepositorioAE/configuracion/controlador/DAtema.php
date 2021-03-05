<?php

require_once('../modelo/configuracion.php');

    $ModeloConfiguracion = new Configuracion();
    $IdTem = $_GET['transporte'];
    $IdInd = $_GET['transaction'];
    $ModeloConfiguracion->deleteIndicadorATema($IdTem, $IdInd);

?>