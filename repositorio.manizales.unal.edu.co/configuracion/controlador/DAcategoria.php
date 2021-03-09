<?php

require_once('../modelo/configuracion.php');

    $ModeloConfiguracion = new Configuracion();
    $IdCat = $_GET['transporte'];
    $IdTem = $_GET['transaction'];
    $Ruta = "?transaction=" . $IdCat;
    $ModeloConfiguracion->deleteTemaACategoria($IdCat, $IdTem, $Ruta);

?>