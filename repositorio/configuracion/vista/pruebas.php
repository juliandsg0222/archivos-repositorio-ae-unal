<?php

require_once('../modelo/configuracion.php');

$ModeloConfiguracion = new Configuracion();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<table class="table table-hover"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">PERÍODO</th><th scope="col">ACCIÓN</th></tr></thead><tbody><?php $Periodos = $ModeloConfiguracion->getPeriodos(); $cont = 1; if ($Periodos != null) { foreach ($Periodos as $peri) { ?><tr><th scope="row"><?php echo $cont++ ?></th><td><?php echo $peri["nomPer"] ?></td></tr><?php } } ?></tbody></table>
</body>

</html>