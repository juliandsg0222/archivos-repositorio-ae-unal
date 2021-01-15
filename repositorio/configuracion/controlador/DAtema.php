<?php

require_once('../Modelo/configuracion.php');

    $ModeloConfiguracion = new Configuracion();
    $IdTem = $_GET['transporte'];
    $IdInd = $_GET['transaction'];
    $ModeloConfiguracion->deleteIndicadorATema($IdTem, $IdInd);

?>