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
<table class="table table-hover"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">USUARIO</h><th scope="col">NOMBRE</th><th scope="col">ROL</th><th scope="col">ACCIÓN</th></tr></thead><tbody><?php $Usuarios = $ModeloConfiguracion->getUsuarios(); $cont = 1; if ($Usuarios != null) { foreach ($Usuarios as $usu) { ?><tr><th scope="row"><?php echo $cont++ ?></th><td><?php echo $usu["idUsu"] ?></td><td><?php echo $usu["nomUsu"] ?></td><td><?php echo $usu["nomRol"] ?></td></tr><?php } } ?></tbody></table>
</body>

</html>